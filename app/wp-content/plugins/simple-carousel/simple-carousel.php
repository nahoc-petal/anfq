<?php
/*
Plugin Name: Simple Carousel
Plugin URI:  http://www.seankarol.com/simple-carousel
Description: A simple image carousel
Version:     1.1.0
Author:      Sean Karol
Author URI:  http://www.seankarol.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: simple-carousel
*/
function simple_carousel_shortcode( $atts ) {
    wp_enqueue_script( 'simple-carousel', plugins_url( 'simple-carousel.min.js', __FILE__ ), array( 'jquery' ), '1.0.0' );
    wp_enqueue_style( 'simple-carousel', plugins_url( 'simple-carousel.css', __FILE__ ), array(), '1.0.0' );

    $a = shortcode_atts( array(
        'width' => '100%',
        'type' => 'manual', /* manual or category */
        'posts_per_page' => 5,
        'order' => 'DESC',
        'orderby' => 'date',
        'class' => '',
    ), $atts );

    $images = array();
    $links = array();
    $texts = array();

    $width = $a['width'];
    $type = $a['type'];
    $class = $a['class'];

    switch ($type) {
      case 'manual':
        foreach ($atts as $key => $value) {
        	$seperator = strpos( $key, "_" );

        	if ( $seperator !== false ) {
        		$number = substr( $key, $seperator + 1 );
        		$cmd = substr( $key, 0, $seperator );

      			if ( $number >= 0 && $number < 99 ) {
      				switch ( $cmd ) {
      					case 'img':
      						$images[$number] = $value;
      						break;
      					case 'link':
      						$links[$number] = $value;
      						break;
      					case 'title':
      						$texts[$number] = $value;
      				}
      			}
          }
        }
        break;
      case 'category':
        $posts = get_posts( $a );

        if ( !empty( $posts ) ) {
          $count = 0;

          foreach($posts as $post) {
            setup_postdata( $post );

            $title = get_the_title( $post );
            $url = get_permalink( $post );
            $imgSrc = wp_get_attachment_url( get_post_thumbnail_id( $post ) );

            if ( $imgSrc ) {
              $images[$count] = $imgSrc;
              $links[$count] = $url;
              $texts[$count] = $title;

              $count++;
            }
          }
          wp_reset_postdata();
        }

        break;
    }

    $html = "<div class='carousel " .$class. "' style='width: " .$width. "'><div class='slides'>";

    $count = 0;

    for ($i = 0; $i < sizeof($images); $i++) {
   		$link = $links[$i];
   		$image = $images[$i];
   		$text = $texts[$i];

		$class = $count;

		if ( $count == 0 ) { /* First item is default */
			$class .= " active";
		}

		if ( $image ) {
			$html .= "<a class='" .$class. "' data-index='" .$count. "' href='" .$link. "' target='blank' rel='noopener'><img src='" .$image. "' alt='" .$text. "'></a>";
		}

		$count++;
    }

	$html .= "</div></div>";

	return $html;
}
add_shortcode( 'simple_carousel', 'simple_carousel_shortcode' );

?>