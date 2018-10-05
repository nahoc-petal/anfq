<?php
/**
 * Template Name: About
 *
 * @package anfq
 */

get_header();
?>

	<div id="about primary" class="content-area">
		<main id="main" class="container">
      <section class="section has-text-centered">
        <?php the_title( '<h1 class="title">', '</h1>' );?>
      </section>
      <section class="section has-text-centered">
        <h2 class="subtitle has-text-weight-bold"><?php echo get_field('intro_title'); ?></h2>
        <p><?php echo get_field('intro_description'); ?></p>
      </section>
      <section class="section has-text-centered">
        <h2 class="title"><?php echo get_field('objectives_title'); ?></h2>
        <div class="columns is-multiline">
          <div class="column is-one-third"></div>
        </div>
      </section>
      <section class="section">
        <h2 class="title has-text-centered"><?php echo get_field('administrative_council_title'); ?></h2>
        <div class="columns is-multiline">
          <?php 
            while ( have_rows('administrative_council_members') ) : the_row();
          ?>
            <div class="column is-2">
              <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo the_sub_field('name'); ?>" />
              <br/>
              <strong class='has-text-weight-bold subtitle'><?php echo the_sub_field('name'); ?></strong>
              <p class="is-italic"><?php echo the_sub_field('title'); ?></p>
            </div>
          <?php
            endwhile;
          ?>
        </div>
      </section>
      <section class="section">
        <h2 class="title has-text-centered"><?php echo get_field('work_title'); ?></h2>
        <p><?php echo get_field('work_video_url'); ?></p>
      </section>
      <section class="section">
        <div class="is-member-banner">
          <div class="columns">
            <div class="column is-left-part is-5">
              <h3 class="title has-text-white">Devenir membre</h3>
              <p class="has-text-white">Devenir membre est gratuit ! Les membres actifs ont droit de vote à l'assemblée générale et sont invités à assister aux rencontres et conférences.</p>
              <br/>
              <a href="#" class="button is-primary is-inverted is-outlined has-no-border-radius">Devenir membre</a>
            </div>
            <div class="column is-background-image"></div>
          </div>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
