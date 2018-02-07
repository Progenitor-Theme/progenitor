<?php
/**!
 * Build Hooks 2: Header
 * =====================
 */

/*----------------------------------------------------------------------------*\
  SITE HEADER
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_header') ) {
  function progenitor_build_header() { ?>

    <?php progenitor_action_header_before(); ?>

    <header id="site-header">
      <?php progenitor_action_header_top(); ?>

      <?php progenitor_build_navbar(); ?>

      <?php progenitor_action_header_bottom(); ?>
    </header>

    <?php progenitor_action_header_after(); ?>

  <?php }
};

/*----------------------------------------------------------------------------*\
  SITE NAVBAR
  -----------
  Configurable with up to two Bootstrap navbar menus (left and right)
  and an inline search form (right).
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_navbar') ) {
  function progenitor_build_navbar() { ?>

    <?php progenitor_action_navbar_before(); ?>

    <nav <?php progenitor_navbar_class(); ?>>
      <div <?php progenitor_navbar_inner_class(); ?>>
        <?php progenitor_action_navbar_top(); ?>

        <?php progenitor_build_navbar_brand(); ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExpander" aria-controls="navbarExpander" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarExpander">
          <?php progenitor_build_navbar_menu_left(); ?>
          <?php progenitor_build_navbar_menu_right(); ?>
          <?php progenitor_build_navbar_search(); ?>
        </div>

        <?php progenitor_action_navbar_bottom(); ?>
      </div>
    </nav>

    <?php progenitor_action_navbar_after(); ?>

  <?php }
};

if ( !function_exists('progenitor_build_navbar_brand') ) {
  function progenitor_build_navbar_brand() { ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
      <span><?php bloginfo('name'); ?></span>
    </a>
  <?php }
};

if ( !function_exists('progenitor_build_navbar_menu_left') ) {
  function progenitor_build_navbar_menu_left() {
    wp_nav_menu( array(
      'theme_location'  => 'navbar_menu_left',
      'container'       => false,
      'menu_class'      => '',
      'fallback_cb'     => '__return_false',
      'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
      'depth'           => 2,
      'walker'          => new progenitor_navbar_menu_left()
    ) );
  }
};

if ( !function_exists('progenitor_build_navbar_menu_right') ) {
  function progenitor_build_navbar_menu_right() {
    wp_nav_menu( array(
      'theme_location'  => 'navbar_menu_right',
      'container'       => false,
      'menu_class'      => '',
      'fallback_cb'     => '__return_false',
      'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
      'depth'           => 2,
      'walker'          => new progenitor_navbar_menu_right()
    ) );
  }
};

if ( !function_exists('progenitor_build_navbar_search') ) {
  function progenitor_build_navbar_search() { ?>
    <form class="form-inline ml-auto pt-2 pt-md-0 pl-md-1" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input class="form-control mr-sm-2" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
      <button <?php progenitor_navbar_search_btn_class(); ?> type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'search form submit', 'progenitor') ?>">
        <i class="fas fa-search"></i>
      </button>
    </form>
  <?php }
};
