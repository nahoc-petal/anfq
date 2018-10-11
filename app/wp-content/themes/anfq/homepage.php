<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 * @package anfq
 */

get_header();
?>

	<div id="homepage" class="content-area">
		<main id="main" class="site-main">
      <div class="container">
        <section class="section no-padding-bottom">
          <div class="is-giving-banner">
            <div class="columns is-multiline">
              <div class="column is-paddingless is-left-part is-12-tablet is-12-desktop is-7-widescreen">
              <?php
                the_post();
                get_template_part( 'template-parts/content-only', get_post_type() );
              ?>
              </div>
              <div class="column is-right-part is-12-tablet is-12-desktop is-5-widescreen">
                <h2 class="title"><?php _e('La neurofibromatose', 'anfq'); ?></h2>
                <p><?php echo get_field('neurofibromatose_description'); ?></p>
                <br/>
                <a class="button is-primary is-outlined has-no-border-radius" href="<?php _e('/la-neurofibromatose/', 'anfq'); ?>"><?php _e('En savoir plus', 'anfq'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="section no-padding-top no-padding-bottom">
          <div class="is-mission-banner">
            <div class="columns is-multiline">
              <div class="column is-left-part is-12-tablet is-12-desktop is-5-widescreen">
                <h3 class="title"><?php _e('Notre mission', 'anfq'); ?></h3>
                <p><?php echo get_field('mission'); ?></p>
              </div>
              <div class="column is-right-part is-12-tablet is-12-desktop is-7-widescreen">
                <h2 class="title">
                  <svg width="55px" height="50px" viewBox="0 0 55 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="ANFQ---Accueil" transform="translate(-690.000000, -858.000000)" fill="#FFFFFF">
                              <g id="Group-3" transform="translate(690.000000, 858.000000)">
                                  <g id="Group-11">
                                      <path d="M15,50 L15,0 L25,0 L25,50 L15,50 Z M0,50 L0,35 L10,35 L10,50 L0,50 Z M30,50 L30,25 L40,25 L40,50 L30,50 Z M45,50 L45,15 L55,15 L55,50 L45,50 Z" id="Fill-1"></path>
                                  </g>
                              </g>
                          </g>
                      </g>
                  </svg>
                  &nbsp;&nbsp;
                  <?php _e('Quelques statistiques', 'anfq'); ?>
                </h2>
                <br/>
                <div class="columns">
                  <div class="column is-one-third">
                    <h4 class="title has-text-green">
                      <svg width="44px" height="28px" viewBox="0 0 44 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="ANFQ---Accueil" transform="translate(-691.000000, -991.000000)" fill="#77BA43" fill-rule="nonzero" stroke="#77BA43" stroke-width="0.799999952">
                                  <g id="Group-3" transform="translate(690.000000, 858.000000)">
                                      <path d="M22.2571758,146.409661 C22.2729554,146.399725 22.2891462,146.390266 22.3057399,146.381313 C29.4080851,142.549573 35.6529337,138.184279 34.0833639,127.009546 C34.0148311,126.528818 34.3290793,126.081547 34.7870795,126.01111 C35.2383935,125.93363 35.6679775,126.269964 35.7348389,126.752453 C37.4386187,138.87136 30.6508634,143.817444 23.4220942,147.757317 C23.4058878,147.767566 23.3892461,147.777309 23.3721782,147.786519 C16.1812417,151.665802 10.359291,155.788092 11.9322039,166.990999 C12.0007368,167.471727 11.6864885,167.918998 11.2284884,167.989435 C11.1883716,167.996478 11.1449117,168 11.1047949,168 C10.6986123,168 10.3409041,167.684797 10.2807289,167.248092 C8.57310167,155.100958 14.9156903,150.407661 22.2571758,146.409661 Z M31.1598521,166.135197 L14.844015,166.135197 C14.3826718,166.135197 14.0082483,165.740753 14.0082483,165.254742 C14.0082483,164.768731 14.3826718,164.374287 14.844015,164.374287 L31.1598521,164.374287 C31.6211953,164.374287 31.9956188,164.768731 31.9956188,165.254742 C31.9956188,165.740753 31.6211953,166.135197 31.1598521,166.135197 Z M29.3345377,160.99158 L16.6676579,160.99158 C16.2063147,160.99158 15.8318912,160.597136 15.8318912,160.111125 C15.8318912,159.625114 16.2063147,159.23067 16.6676579,159.23067 L29.3345377,159.23067 C29.7958809,159.23067 30.1703043,159.625114 30.1703043,160.111125 C30.1703043,160.597136 29.7975524,160.99158 29.3345377,160.99158 Z M27.3504276,155.847963 L18.6551111,155.847963 C18.1937678,155.847963 17.8193444,155.453519 17.8193444,154.967508 C17.8193444,154.481497 18.1937678,154.087053 18.6551111,154.087053 L27.3504276,154.087053 C27.8117708,154.087053 28.1861942,154.481497 28.1861942,154.967508 C28.1861942,155.453519 27.8117708,155.847963 27.3504276,155.847963 Z M31.1598521,129.626258 L14.844015,129.626258 C14.3826718,129.626258 14.0082483,129.231814 14.0082483,128.745803 C14.0082483,128.259792 14.3826718,127.865348 14.844015,127.865348 L31.1598521,127.865348 C31.6211953,127.865348 31.9956188,128.259792 31.9956188,128.745803 C31.9956188,129.231814 31.6211953,129.626258 31.1598521,129.626258 Z M29.3345377,134.768114 L16.6676579,134.768114 C16.2063147,134.768114 15.8318912,134.37367 15.8318912,133.887659 C15.8318912,133.401648 16.2063147,133.007204 16.6676579,133.007204 L29.3345377,133.007204 C29.7958809,133.007204 30.1703043,133.401648 30.1703043,133.887659 C30.1703043,134.37367 29.7975524,134.768114 29.3345377,134.768114 Z M27.3504276,139.913492 L18.6551111,139.913492 C18.1937678,139.913492 17.8193444,139.519048 17.8193444,139.033037 C17.8193444,138.547026 18.1937678,138.152582 18.6551111,138.152582 L27.3504276,138.152582 C27.8117708,138.152582 28.1861942,138.547026 28.1861942,139.033037 C28.1861942,139.519048 27.8117708,139.913492 27.3504276,139.913492 Z M19.228447,145.641731 C19.0763375,145.641731 18.9225564,145.599469 18.7838191,145.507902 C14.0333213,142.375243 8.77133432,137.411239 10.2690282,126.752453 C10.3358895,126.271725 10.7721597,125.935391 11.2167876,126.01111 C11.6731162,126.081547 11.989036,126.528818 11.9205032,127.009546 C10.5732473,136.602982 15.0830443,140.987647 19.6730749,144.01465 C20.0625421,144.271743 20.1828925,144.815864 19.9371771,145.227917 C19.7783815,145.495575 19.5059215,145.641731 19.228447,145.641731 Z M34.9091014,168 C34.8689846,168 34.8255247,167.996478 34.7854079,167.989435 C34.3290793,167.918998 34.0131595,167.471727 34.0816924,166.990999 C35.4306198,157.399324 30.9191513,153.012898 26.3291207,149.985895 C25.9396534,149.728802 25.819303,149.184681 26.0650184,148.772628 C26.3107338,148.360575 26.8255661,148.237311 27.2167049,148.494404 C31.9705458,151.628823 37.2325328,156.594588 35.7331673,167.249853 C35.6729921,167.684797 35.315284,168 34.9091014,168 Z" id="Combined-Shape" transform="translate(23.000000, 147.000000) rotate(-270.000000) translate(-23.000000, -147.000000) "></path>
                                  </g>
                              </g>
                          </g>
                      </svg>
                      &nbsp;
                      <?php echo get_field('statistique_1_titre'); ?>
                    </h4>
                    <p><?php echo get_field('statistique_1_description'); ?></p>
                  </div>
                  <div class="column is-one-third">
                    <h4 class="title has-text-green">
                      <svg width="52px" height="30px" viewBox="0 0 52 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="ANFQ---Accueil" transform="translate(-925.000000, -990.000000)" stroke="#77BA43" stroke-width="2.30399982">
                                  <g id="Group-3" transform="translate(690.000000, 858.000000)">
                                      <g id="Group" transform="translate(236.000000, 133.000000)">
                                          <path d="M24.997093,11.6611296 C21.7860465,11.6611296 19.1831395,9.11771761 19.1831395,5.98006645 C19.1831395,2.84241528 21.7860465,0.299003322 24.997093,0.299003322 C28.2081395,0.299003322 30.8110465,2.84241528 30.8110465,5.98006645 C30.8110465,9.11771761 28.2081395,11.6611296 24.997093,11.6611296 Z" id="Shape"></path>
                                          <path d="M37.2063953,22.5460465 L37.2063953,27 L12.7877907,27 L12.7877907,22.5460465 C12.7877907,18.9101661 15.6715116,15.9219269 19.3284884,15.660598 C20.7936047,17.0524585 22.7936047,17.910299 24.997093,17.910299 C27.2005814,17.910299 29.2005814,17.0524585 30.6656977,15.660598 C34.3226744,15.9219269 37.2063953,18.9101661 37.2063953,22.5460465 Z" id="Shape"></path>
                                          <path d="M40.1133721,12.7973422 C37.5447674,12.7973422 35.4622093,10.7623854 35.4622093,8.25249169 C35.4622093,5.74259801 37.5447674,3.7076412 40.1133721,3.7076412 C42.6819767,3.7076412 44.7645349,5.74259801 44.7645349,8.25249169 C44.7645349,10.7623854 42.6819767,12.7973422 40.1133721,12.7973422 Z" id="Shape"></path>
                                          <path d="M40.119186,18.4789734 C41.7877907,18.4789734 43.119186,17.8818937 44.1831395,16.7740864 L44.7703488,16.7740864 C47.3401163,16.7740864 49.4215116,18.807907 49.4215116,21.3189369 L49.4215116,24.7275748 L40.1069767,24.7275748" id="Shape"></path>
                                          <path d="M9.88662791,12.7973422 C12.4552326,12.7973422 14.5377907,10.7623854 14.5377907,8.25249169 C14.5377907,5.74259801 12.4552326,3.7076412 9.88662791,3.7076412 C7.31802326,3.7076412 5.23546512,5.74259801 5.23546512,8.25249169 C5.23546512,10.7623854 7.31802326,12.7973422 9.88662791,12.7973422 Z" id="Shape"></path>
                                          <path d="M9.88081395,18.4789734 C8.2122093,18.4789734 6.875,17.8818937 5.79709302,16.7740864 L5.21569767,16.7740864 C2.65988372,16.7740864 0.578488372,18.807907 0.578488372,21.3189369 L0.578488372,24.7275748 L9.89302326,24.7275748" id="Shape"></path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </svg>
                      &nbsp;<?php echo get_field('statistique_2_titre'); ?>
                    </h4>
                    <p><?php echo get_field('statistique_2_description'); ?></p>
                  </div>
                  <div class="column is-one-third">
                    <h4 class="title has-text-green">
                      <svg width="43px" height="37px" viewBox="0 0 43 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="ANFQ---Accueil" transform="translate(-1160.000000, -982.000000)" fill="#77BA43" fill-rule="nonzero">
                                  <g id="Group-3" transform="translate(690.000000, 858.000000)">
                                      <path d="M508.32866,148.91834 C507.233645,147.824632 505.792835,147.248996 504.294393,147.248996 C503.314642,147.248996 502.334891,147.47925 501.528037,147.997323 L496.744548,143.219545 C497.147975,142.413655 497.378505,141.550201 497.378505,140.57162 C497.378505,137.866131 495.476636,135.621151 492.998442,135.045515 L492.998442,128.080321 L497.205607,128.080321 C497.781931,130.613119 500.029595,132.570281 502.79595,132.570281 C505.965732,132.570281 508.501558,130.037483 508.501558,126.871486 C508.501558,123.705489 505.965732,121.172691 502.79595,121.172691 C500.14486,121.172691 497.897196,123.014726 497.26324,125.48996 L486.197819,125.48996 C485.621495,122.957162 483.373832,121 480.607477,121 C477.437695,121 474.901869,123.532798 474.901869,126.698795 C474.901869,129.864793 477.437695,132.39759 480.607477,132.39759 C483.258567,132.39759 485.506231,130.555556 486.140187,128.080321 L490.404984,128.080321 L490.404984,134.987952 C487.869159,135.563588 486.024922,137.808568 486.024922,140.514056 C486.024922,141.550201 486.313084,142.586345 486.831776,143.392236 L481.933022,148.285141 C481.010903,147.651941 479.858255,147.30656 478.705607,147.30656 C477.207165,147.30656 475.766355,147.882195 474.67134,148.975904 C473.576324,150.069612 473,151.508701 473,153.005355 C473,154.502008 473.576324,155.941098 474.67134,157.034806 C475.766355,158.128514 477.207165,158.70415 478.705607,158.70415 C480.20405,158.70415 481.64486,158.128514 482.739875,157.034806 C483.834891,155.941098 484.411215,154.502008 484.411215,153.005355 C484.411215,152.026774 484.180685,151.048193 483.661994,150.242303 L488.560748,145.349398 C489.079439,145.694779 489.713396,145.982597 490.347352,146.097724 L490.347352,152.7751 C487.811526,153.350736 485.96729,155.595716 485.96729,158.301205 C485.96729,161.467202 488.503115,164 491.672897,164 C494.842679,164 497.378505,161.467202 497.378505,158.301205 C497.378505,155.595716 495.476636,153.350736 492.998442,152.7751 L492.998442,146.097724 C493.747664,145.925033 494.439252,145.579652 495.015576,145.176707 L499.568536,149.72423 C498.070093,151.96921 498.300623,155.02008 500.260125,156.977242 C501.35514,158.07095 502.79595,158.646586 504.294393,158.646586 C505.792835,158.646586 507.233645,158.07095 508.32866,156.977242 C509.423676,155.883534 510,154.444444 510,152.947791 C510,151.451138 509.366044,149.954485 508.32866,148.91834 Z M502.738318,123.763052 C504.46729,123.763052 505.850467,125.144578 505.850467,126.871486 C505.850467,128.598394 504.46729,129.97992 502.738318,129.97992 C501.009346,129.97992 499.626168,128.598394 499.626168,126.871486 C499.626168,125.144578 501.009346,123.763052 502.738318,123.763052 Z M480.607477,129.749665 C478.878505,129.749665 477.495327,128.368139 477.495327,126.641232 C477.495327,124.914324 478.878505,123.532798 480.607477,123.532798 C482.336449,123.532798 483.719626,124.914324 483.719626,126.641232 C483.719626,128.368139 482.278816,129.749665 480.607477,129.749665 Z M480.895639,155.192771 C480.319315,155.768407 479.512461,156.113788 478.705607,156.113788 C477.898754,156.113788 477.0919,155.768407 476.515576,155.192771 C475.939252,154.617135 475.593458,153.811245 475.593458,153.005355 C475.593458,152.199465 475.939252,151.393574 476.515576,150.817938 C477.0919,150.242303 477.898754,149.896921 478.705607,149.896921 C479.512461,149.896921 480.319315,150.242303 480.895639,150.817938 C481.471963,151.393574 481.817757,152.199465 481.817757,153.005355 C481.817757,153.811245 481.471963,154.617135 480.895639,155.192771 Z M494.785047,158.301205 C494.785047,160.028112 493.401869,161.409639 491.672897,161.409639 C489.943925,161.409639 488.560748,160.028112 488.560748,158.301205 C488.560748,156.574297 489.943925,155.192771 491.672897,155.192771 C493.401869,155.192771 494.785047,156.631861 494.785047,158.301205 Z M491.672897,143.62249 C489.943925,143.62249 488.560748,142.240964 488.560748,140.514056 C488.560748,138.787149 489.943925,137.405622 491.672897,137.405622 C493.401869,137.405622 494.785047,138.787149 494.785047,140.514056 C494.785047,142.240964 493.401869,143.62249 491.672897,143.62249 Z M506.484424,155.135207 C505.9081,155.710843 505.101246,156.056225 504.294393,156.056225 C503.487539,156.056225 502.680685,155.710843 502.104361,155.135207 C500.894081,153.926372 500.894081,151.96921 502.104361,150.760375 C502.680685,150.184739 503.487539,149.839357 504.294393,149.839357 C505.101246,149.839357 505.9081,150.184739 506.484424,150.760375 C507.060748,151.336011 507.406542,152.141901 507.406542,152.947791 C507.406542,153.753681 507.060748,154.559572 506.484424,155.135207 Z" id="Shape" transform="translate(491.500000, 142.500000) rotate(-90.000000) translate(-491.500000, -142.500000) "></path>
                                  </g>
                              </g>
                          </g>
                      </svg>
                      &nbsp;<?php echo get_field('statistique_3_titre'); ?>
                    </h4>
                    <p><?php echo get_field('statistique_3_description'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section no-padding-top">
          <div class="is-become-member-banner">
            <div class="columns">
              <div class="column is-left-part is-paddingless">
                <div class="videoWrapper">
                  <iframe width="100%" height="400" src="https://www.youtube.com/embed/zuph3NdNYiQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
              </div>
              <div class="column is-right-part is-5">
                <h2 class="title"><?php _e('Faire un don' ,'anfq'); ?></h2>
                <p>Lorem impsum</p>
                <br/>
                <a class="button is-primary has-no-border-radius" href="<?php _e('/devenir-membre/#faire-un-don', 'anfq'); ?>"><?php _e('Faire un don' ,'anfq'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="section events-to-come">
        <br/>
          <h2 class="title"><?php echo get_field('events_to_come'); ?></h2>
          <br/>
          <div class="columns">
            <?php
              $args = array( 
                'post_type' => 'event',
                'posts_per_page' => '3',
              );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="column">
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
                <a class="has-text-primary" href="<?php echo get_post_meta(get_the_ID())['event-link'][0]; ?>"><?php _e('M\'inscrire sur Facebook >','anfq'); ?></a>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
          <br/>
          <div class="has-text-centered">
            <a href="<?php _e('/evenements', 'anfq'); ?>" class="button is-primary is-outlined has-no-border-radius">Voir tous les événements</a>
          </div>
          <br/>
        </section>

        <section class="section no-padding-bottom">
          <div class="is-member-banner">
            <div class="columns">
              <div class="column is-left-part is-5">
                <h3 class="title has-text-white"><?php _e('Devenir membre', 'anfq'); ?></h3>
                <p class="has-text-white">Devenir membre est gratuit ! Les membres actifs ont droit de vote à l'assemblée générale et sont invités à assister aux rencontres et conférences.</p>
                <br/>
                <a href="<?php _e('/devenir-membre/', 'anfq'); ?>" class="button is-primary is-inverted is-outlined has-no-border-radius"><?php _e('Devenir membre', 'anfq'); ?></a>
              </div>
              <div class="column is-background-image"></div>
            </div>
          </div>
        </section>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
