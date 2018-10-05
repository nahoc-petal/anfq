<?php
/**
 * Template Name: Neurofibromatosis
 *
 * @package anfq
 */

get_header();
?>

	<div id="neurofibromatosis" class="content-area">
		<main id="main" class="container">
      <section class="section has-text-centered">
        <?php the_title( '<h1 class="page-title">', '</h1>' );?>
      </section>
      <section class="section faq">
        <?php
            $args = array( 'post_type' => 'faq');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
            <div class="box has-no-border-radius">
              <div class="level">
                <div class="level-left">
                  <h2 class="subtitle"><?php the_title(); ?></h2>
                </div>
                <div class="level-right">
                  <a href="#" class='more button is-dark has-no-border-radius is-large'>+</a>
                </div>
              </div>
              <p><?php the_content(); ?></p>
            </div>
          <?php endwhile; ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
