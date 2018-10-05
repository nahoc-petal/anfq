<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anfq
 */

?>

	</div><!-- #content -->

  <div class="container">
    <footer id="contact" class="footer">
      <div class="columns">
        <div class="column is-2">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            ) );
          ?>
        </div>
        <div class="column is-2">
          <h6 class="subtitle">Adresse</h6>
          <p>
            <small>C.P. 150, Succ. St-Michel,</small><br/>
            <small>Montréal, Québec,</small><br/>
            <small>Canada,</small><br/>
          </p>
          <br/>
          <h6 class="subtitle">Téléphone</h6>
          <p>
            <small><a href="tel:5143856702">514-385-6702</a></small>
          </p>
        </div>
        <div class="column is-2">
          <h6 class="subtitle">Courriel</h6>
          <p>
            <small><a href="mailto:anfq@anfq.org">anfq@anfq.org</a></small>
          </p>
        </div>
        <div class="column">
          <h4 class="subtitle">Faire un don</h4>
          <p>sdfksjdfhgsdkjfhgjkdsfhg</p>
          <br/>
          <a href="#" class="button is-primary has-no-border-radius">Faire un don</a>
        </div>
      </div>
    </footer>
    <div class="copyright has-text-centered">
      <small>Tous droits réservés 2018 &copy; Association de la Neurofibromatose du Québec</small>
    </div>
  </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
