<?php
/**
 * Template part for displaying post content only
 *
 * @package anfq
 */

?>

<?php
the_content( sprintf(
  wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'anfq' ),
    array(
      'span' => array(
        'class' => array(),
      ),
    )
  ),
  get_the_title()
) );
