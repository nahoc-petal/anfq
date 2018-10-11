<?php
/**
 * Template Name: Resources
 *
 * @package anfq
 */

get_header();
?>

	<div id="resources">
		<main id="main" class="container">
      <section class="section">
        <h1 class="page-title has-text-centered"><?php echo get_the_title(); ?></h1>
      </section>
      <section class="section filters">
        <?php
          $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC'
          ) );

          if(isset($_GET['filter'])) {
            $selectedCategory = $_GET['filter'];
          } else {
            $selectedCategory = '';
          }

          ?>

          <a href="?filter=" class="<?php if($selectedCategory === '') { echo 'is-primary'; } else { echo 'is-outlined'; }?> button has-no-border-radius">
            <?php _e('Toutes', 'anfq'); ?>
          </a>

          <?php
          
          foreach( $categories as $category ) { ?>
            <a href="?filter=<?php echo $category->slug; ?>" class="<?php if($selectedCategory === $category->slug) { echo 'is-primary'; } else { echo 'is-outlined'; }?> button has-no-border-radius">
              <?php echo $category->name; ?>
            </a>
          <?php } ?>
      </section>
      <section class="section">
        <div class="columns is-multiline">
          <?php
            $args = array( 
              'post_type' => 'resources',
              'category_name'  => $selectedCategory,
            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
            <div class="column is-one-third">
              <div class="box has-no-border-radius">
                <div class="level">
                  <div class="level-left" style="display: flex;">
                      <img class="icon-bg" src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/<?php foreach((get_the_category()) as $category) { echo $category->slug; } ?>.svg" alt="<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>" />
                      &nbsp;&nbsp;<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
                  </div>
                  <div class="level-right date"><?php the_date(); ?></div>
                </div>
                <h2 class="subtitle has-text-weight-bold"><?php the_title(); ?></h2>
                <hr>
                <a href="<?php echo get_the_permalink(); ?>" class="has-text-primary"><?php echo get_post_meta(get_the_ID())['link_label'][0] ?></a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
      <br/><br/><br/><br/>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
