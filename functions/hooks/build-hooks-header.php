<?php
/**!
 * Build Hooks: Site Header
 * ========================
 */

/*----------------------------------------------------------------------------*\
  SITE HEADER
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_header') ) {
  function progenitor_build_header() { ?>

    <?php progenitor_action_header_before(); ?>

    <header id="site-header">
      <?php progenitor_action_header_top(); ?>

      <?php
        if ( function_exists('progenitor_framework_build_header_nav')) {
          progenitor_framework_build_header_nav();
        } else {
          progenitor_build_header_nav();
        }
      ?>

      <?php progenitor_action_header_bottom(); ?>
    </header>

    <?php progenitor_action_header_after(); ?>

  <?php }
};

if ( !function_exists('progenitor_build_header_nav') ) {
  function progenitor_build_header_nav() {
    ?>
    <header <?php progenitor_header_container_class(); ?>>
      <?php bloginfo('name'); ?>
      <nav>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'nav_menu_left',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => ''
          ) );
          wp_nav_menu( array(
            'theme_location'  => 'nav_menu_right',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => ''
          ) );
        ?>
      </nav>
    </header>

    <?php

  }
};
