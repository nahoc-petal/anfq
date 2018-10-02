<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anfq
 */

get_header();
?>

	<div id="primary homepage" class="content-area">
		<main id="main" class="site-main">
      <div class="container">

        <section class="section">
          <div class="is-giving-banner">
            <div class="columns">
              <div class="column is-paddingless is-left-part">
              <?php
                the_post();
                get_template_part( 'template-parts/content-only', get_post_type() );
              ?>
              </div>
              <div class="column is-right-part is-5">
                <h2 class="title">La neurofibromatose</h2>
                <p>La neurofibromatose est un désordre d'origine génétique. C'est un affection de la peau et des systèmes nerveux et osseux qui est à 50% héréditaire, ce qui veut dire que le gène défectueux de la NF a été transmis à l'enfant par l'un ou l'autre de ses parents. Dans l'autre moitié des cas, elle est le résultat d'une mutation génétique spontanée.</p>
                <br/>
                <a class="button is-primary is-outlined has-no-border-radius" href="#">En savoir plus</a>
              </div>
            </div>
          </div>
        </section>

        <section class="section">
          <div class="is-mission-banner">
            <div class="columns">
              <div class="column is-left-part is-5">
                <h3 class="title">Notre mission</h3>
                <p>Nous sommes heureux de vous accueillir pour partager avec vous notre vie associative dont la mission se veut pour la cause de la neurofibromatose.</p>
              </div>
              <div class="column is-right-part">
                <h2 class="title">Quelques statistiques</h2>
                <div class="columns">
                  <div class="column is-one-third">
                    <h4 class="title">28 %</h4>
                    <p>sdjhfgas dfasdhfas djkfhasdkjfh sd</p>
                  </div>
                  <div class="column is-one-third">
                    <h4 class="title">1000</h4>
                    <p>sdjhfgas dfasdhfas djkfhasdkjfh sd</p>
                  </div>
                  <div class="column is-one-third">
                    <h4 class="title">245</h4>
                    <p>sdjhfgas dfasdhfas djkfhasdkjfh sd</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section">
          <div class="is-giving-banner">
            <div class="columns">
              <div class="column is-left-part">
              </div>
              <div class="column is-right-part is-5">
                <h2 class="title">Faire un don</h2>
                <p>sdakjfhas dfsajdkfh asdf</p>
                <br/>
                <a class="button is-primary has-no-border-radius" href="#">Faire un don</a>
              </div>
            </div>
          </div>
        </section>

        <section class="section">
          <h2 class="title">Événements à venir</h2>
          <div class="columns">
            <div class="column">
              <div class="box has-no-border-radius">
                <hr/>
                <h6>555 avenue du chemin</h6>
                <hr/>
                <h3 class="subtitle">Nom de l'événement</h3>
                <p>Breve description</p>
                <br/>
                <a class="has-text-primary" href="#">M'inscrire sur facebook</a>
              </div>
            </div>
            <div class="column">
              <div class="box has-no-border-radius">
                <hr/>
                <h6>555 avenue du chemin</h6>
                <hr/>
                <h3 class="subtitle">Nom de l'événement</h3>
                <p>Breve description</p>
                <br/>
                <a class="has-text-primary" href="#">M'inscrire sur facebook</a>
              </div>
            </div>
            <div class="column">
              <div class="box has-no-border-radius">
                <hr/>
                <h6>555 avenue du chemin</h6>
                <hr/>
                <h3 class="subtitle">Nom de l'événement</h3>
                <p>Breve description</p>
                <br/>
                <a class="has-text-primary" href="#">M'inscrire sur facebook</a>
              </div>
            </div>
          </div>
          <div class="has-text-centered">
            <a href="#" class="button is-primary is-outlined has-no-border-radius">Voir tous les événements</a>
          </div>
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
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
