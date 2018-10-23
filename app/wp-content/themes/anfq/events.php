<?php
/**
 * Template Name: Events
 *
 * @package anfq
 */

get_header();
?>

	<div id="events" class="content-area">
		<main id="main" class="container">
      <section class="section">
        <div class="is-promo-event-banner">
          <div class="columns is-multiline">
            <?php
              $args = array( 
                'post_type' => 'event',
                'order'    => 'ASC',
                'orderby'  => 'event-start-date',
                'meta_key' => 'event-start-date',
              );
              $loop = new WP_Query( $args );
              $count = 0;
              while ( $loop->have_posts() ) : $loop->the_post();
                if($count === 0 && time() < get_post_meta(get_the_ID())['event-start-date'][0]):
            ?>
            <div class="column is-background-image is-left-part is-12-tablet is-12-desktop is-7-widescreen" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
            </div>
            <div class="column is-right-part is-12-tablet is-12-desktop is-5-widescreen promoted-event">
              <h2 class="subtitle"><?php _e('Prochain événement', 'anfq'); ?></h2>
              <div class="level">
                <div class="level-left">
                  <span class="has-text-lightgreen day">
                    <?php echo gmdate("d", get_post_meta(get_the_ID())['event-start-date'][0]); ?>
                  </span>
                  <div class="column">
                    <h4 class="subtitle"><?php echo gmdate("F", get_post_meta(get_the_ID())['event-start-date'][0]); ?></h4>
                    <h5><?php echo get_post_meta(get_the_ID())['event-time'][0]; ?></h5>
                  </div>
                </div>
              </div>
              <hr/>
              <h6><?php echo get_post_meta(get_the_ID())['event-location'][0]; ?></h6>
              <hr/>
              <h3 class="subtitle"><?php the_title(); ?></h3>
              <p><?php echo get_post_meta(get_the_ID())['event-summary'][0]; ?></p>
              <br/>
              <a class="is-primary button has-no-border-radius is-outlined" href="<?php echo get_post_meta(get_the_ID())['event-link'][0]; ?>"><?php _e('M\'inscrire sur facebook','anfq'); ?></a>
            </div>
            <?php $count++; endif; endwhile; ?>
          </div>
        </div>
      </section>
      <section class="section no-padding-bottom">
        <?php the_title( '<h1 class="page-title">', '</h1>' );?>
      </section>
      <section class="section events-to-come no-padding-top">
        <br/>
          <h2 class="title"><?php echo get_field('events_to_come'); ?></h2>
          <div class="columns is-multiline">
            <?php
              $args = array( 
                'post_type' => 'event',
                'order'    => 'ASC',
                'orderby'  => 'event-start-date',
                'meta_key' => 'event-start-date'
              );
              $loop = new WP_Query( $args );
              $count = 0;
              while ( $loop->have_posts() ) : $loop->the_post();
                if($count !== 0 && time() < get_post_meta(get_the_ID())['event-start-date'][0]):
            ?>
            <div class="column is-4">
              <div class="box has-no-border-radius">
                <div class="level">
                  <div class="level-left">
                    <span class="has-text-lightgreen day">
                    <?php echo gmdate("d", get_post_meta(get_the_ID())['event-start-date'][0]); ?>
                    </span>
                    <div class="column">
                      <h4 class="subtitle"><?php echo gmdate("F", get_post_meta(get_the_ID())['event-start-date'][0]); ?></h4>
                      <h5><?php echo get_post_meta(get_the_ID())['event-time'][0]; ?></h5>
                    </div>
                  </div>
                </div>
                <hr/>
                <h6><?php echo get_post_meta(get_the_ID())['event-location'][0]; ?></h6>
                <hr/>
                <h3 class="subtitle"><?php the_title(); ?></h3>
                <p><?php echo get_post_meta(get_the_ID())['event-summary'][0]; ?></p>
                <br/>
                <a class="has-text-primary" href="<?php echo get_post_meta(get_the_ID())['event-link'][0]; ?>"><?php _e('M\'inscrire sur facebook','anfq'); ?></a>
              </div>
            </div>
            <?php endif; $count++; endwhile; ?>
          </div>
          <br/>
          <br/>
        </section>
      
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
