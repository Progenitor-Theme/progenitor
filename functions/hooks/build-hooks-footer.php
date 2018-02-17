<?php
/**!
 * Build Hooks: Site Footer
 * ========================
 */

/*----------------------------------------------------------------------------*\
  FOOTER
  ------
  The Progenitor footer has ONE WIDGET AREA but you can drag multiple widgets into it. Each widget will be in its own Bootstrap flexbox column. E.g. 3 footer widgets in 3 columns, one-third width each.
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_footer') ) {
  function progenitor_build_footer() { ?>

    <?php progenitor_action_footer_before(); ?>

    <footer id="site-footer" <?php progenitor_footer_class(); ?> role="navigation">
      <?php progenitor_action_footer_top(); ?>
      <div class="container">

      	<div class="row">
          <?php dynamic_sidebar('footer-widget-area'); ?>
        </div>

      </div>

      <?php progenitor_build_footer_bottom()?>

      <?php progenitor_action_footer_bottom(); ?>
    </footer>

    <?php progenitor_action_footer_after(); ?>

    <?php progenitor_action_body_bottom(); ?>

    <?php wp_footer(); ?>
    </body>
    </html>

  <?php }
};

/*----------------------------------------------------------------------------*\
  FOOTER BOTTOM
  -------------
  Within the site `<footer>`, below the footer widget area.
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_footer_bottom') ) {
  function progenitor_build_footer_bottom() { ?>

    <?php progenitor_action_footer_bottom_before(); ?>

    <div <?php progenitor_footer_bottom_class(); ?>>
      <div class="container text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
      </div>
    </div>

    <?php progenitor_action_footer_bottom_after(); ?>

  <?php }
};
