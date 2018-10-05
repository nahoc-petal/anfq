<?php
/**
 * Template Name: Resources single
 *
 * @package anfq
 */

get_header();
?>

	<div id="resources">
		<main id="main" class="container">
      <section class="section">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
      </section>
      <section class="section filters">
        <?php
          $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC'
          ) );
          
          foreach( $categories as $category ) { ?>
            <a href="?filter=<?php echo $category->slug; ?>" class="button is-outlined has-no-border-radius">
              <?php echo $category->name; ?>
            </a>
          <?php } ?>
      </section>
      <section class="section">
        <div class="columns is-multiline">
          <?php
            $args = array( 'post_type' => 'resources');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
            <div class="column is-one-third">
              <div class="box has-no-border-radius">
                <div class="level">
                  <div class="level-left"><img src="" /><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div>
                  <div class="level-right"><?php the_date(); ?></div>
                </div>
                <h2 class="subtitle has-text-weight-bold"><?php the_title(); ?></h2>
                <hr>
                <a href="#" class="has-text-primary">Télécharger</a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
