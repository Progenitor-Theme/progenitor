<?php
/**!
 * Bootstrap Navbar
 */

/*----------------------------------------------------------------------------*\
  SITE NAVBAR
  -----------
  Configurable with up to two Bootstrap navbar menus (left and right)
  and an inline search form (right).
  If you remove the left or right menu in your child theme, be sure also to
  unregister the menu too, so that it does not appear in the admin area. See:
  https://codex.wordpress.org/Function_Reference/unregister_nav_menu
\*----------------------------------------------------------------------------*/

function progenitor_framework_build_header_nav() { ?>

  <?php progenitor_action_header_nav_before(); ?>

  <nav <?php progenitor_header_nav_class(); ?>>
    <div <?php progenitor_header_nav_inner_class(); ?>>
      <?php progenitor_action_header_nav_top(); ?>

      <?php progenitor_build_header_nav_brand(); ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExpander" aria-controls="navbarExpander" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarExpander">
        <?php
          if (! has_nav_menu('nav_menu_left') && ! has_nav_menu('nav_menu_right') ) {
            ?>
              <div class="navbar-nav mr-auto">
                <!-- Empty (this placeholder is used if no menus). -->
              </div>
            <?php
          }
          progenitor_build_header_nav_menu_left();
          progenitor_build_header_nav_menu_right();
          progenitor_build_header_nav_search();
        P?>
      </div>

      <?php progenitor_action_header_nav_bottom(); ?>
    </div>
  </nav>

  <?php progenitor_action_header_nav_after(); ?>

<?php }

if ( !function_exists('progenitor_build_header_nav_brand') ) {
  function progenitor_build_header_nav_brand() { ?>   
    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
        <span><?php bloginfo('name'); ?></span>
    </a>
    <?php
    }		
  }
};

if ( !function_exists('progenitor_build_header_nav_menu_left') ) {
  function progenitor_build_header_nav_menu_left() {
    wp_nav_menu( array(
      'theme_location'  => 'nav_menu_left',
      'container'       => false,
      'menu_class'      => '',
      'fallback_cb'     => '',
      'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
      'depth'           => 2,
      'walker'          => new progenitor_header_nav_menu_left()
    ) );
  }
};

if ( !function_exists('progenitor_build_header_nav_menu_right') ) {
  function progenitor_build_header_nav_menu_right() {
    wp_nav_menu( array(
      'theme_location'  => 'nav_menu_right',
      'container'       => false,
      'menu_class'      => '',
      'fallback_cb'     => '',
      'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
      'depth'           => 2,
      'walker'          => new progenitor_header_nav_menu_right()
    ) );
  }
};

if ( !function_exists('progenitor_build_header_nav_search') ) {
  function progenitor_build_header_nav_search() { ?>
    <form class="form-inline pt-2 pt-md-0 pl-md-1" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input class="form-control mr-sm-1" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
      <button <?php progenitor_header_nav_search_button_class(); ?> type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'search form submit', 'progenitor') ?>">
        <i class="fas fa-search"></i>
      </button>
    </form>
  <?php }
};
