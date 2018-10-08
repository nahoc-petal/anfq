<?php
/**
 * Template Name: Resources single
 *
 * @package anfq
 */

get_header();
?>

	<div id="resource">
		<main id="main" class="container">
      <section class="section">
        <h1 class="page-title has-text-centered"><?php echo get_the_title(); ?></h1>
      </section>
      <section class="section">
        <div class="content" style="max-width: 800px; margin: auto;">
          <?php echo get_the_content(); ?>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
