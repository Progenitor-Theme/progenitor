<?php
/**!
 * Build Hooks 3: Site Main
 * ========================
 */

/*----------------------------------------------------------------------------*\
  SITE MAIN
  ---------
  By default, all Progenitor templates use the same `#site-main` with different `#content` inside (depending on what webpage is being served).

  <body>
    <header id="site-header">...</header>

    <div id="site-banner">...</div>

    <main id="site-main">
      <div id="sidebar-1">...</div>

      <div id="content">...</div>

      <div id="sidebar-2">...</div>
    </main>

    <footer id="site-footer">...</footer>
  </body>

  Notes:
  * `#site-main` is being used for the flexbox sticky footer CSS.
  * The sticky footer is pushed down by the WP admin bar -- it is OK when
  you are not logged in, or when youhide the WP admin bar.)
  * The `<main>` is not used for #site-main -- because it is being used for
  the main content inside the (post or page) article (see the loops).
\*----------------------------------------------------------------------------*/

// #site-main top (including sidebar-1 before the `#content`)

if ( !function_exists('progenitor_build_main_top') ) {
  function progenitor_build_main_top() { ?>
    <main id="site-main" <?php progenitor_main_outer_class(); ?>>
      <?php progenitor_action_mainbody_top(); ?>
      <div <?php progenitor_main_container_class(); ?>>
        <div <?php progenitor_main_inner_class(); ?>>

          <?php progenitor_build_sidebar_1(); ?>
  <?php }
};

// #site-main bottom (including sidebar-2 after the `#content`)

if ( !function_exists('progenitor_build_main_bottom') ) {
  function progenitor_build_main_bottom() { ?>
          <?php progenitor_build_sidebar_2(); ?>

        </div>
      </div>
      <?php progenitor_action_mainbody_bottom(); ?>
    </main><!-- /#site-main -->
  <?php }
};

/*----------------------------------------------------------------------------*\
  BUILD EACH MAINBODY
  -------------------
  Here each mainbody is individually controlled by build hooks -- so that child
  themes can swap in their own mainbody designs.

  The `#content` templates (where the loop is) are determined by conditional
  tags.

  Child themes can add more specific conditional tags, in `progenitor_child_mainbody_specifics()` -- see below.

  See: https://codex.wordpress.org/Conditional_Tags
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_main') ) {
  function progenitor_build_main() {

    // Homepage is the blog-index

    if ( is_front_page() && is_home() ) {
      if ( !function_exists('progenitor_build_main_blog_index') ) {
        function progenitor_build_main_blog_index() {

          progenitor_build_main_top();
          progenitor_build_content_blog_index();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_blog_index();
    }

    // Homepage is a page

    elseif ( is_front_page() ) {
      if ( !function_exists('progenitor_build_main_frontpage') ) {
        function progenitor_build_main_frontpage() {

          progenitor_build_main_top();
          progenitor_build_content_frontpage();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_frontpage();
    }

    // Homepage is either the blog-index or a page (non-specific)

    elseif ( is_home() ) {
      if ( !function_exists('progenitor_build_main_home') ) {
        function progenitor_build_main_home() {

          progenitor_build_main_top();
          progenitor_build_content_blog_index();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_home();
    }

    elseif ( is_author() ) {
      if ( !function_exists('progenitor_build_main_author') ) {
        function progenitor_build_main_author() {

          progenitor_build_main_top();
          progenitor_build_content_author();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_author();
    }

    elseif ( is_category() ) {
      if ( !function_exists('progenitor_build_main_category') ) {
        function progenitor_build_main_category() {

          progenitor_build_main_top();
          progenitor_build_content_category();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_category();
    }

    elseif ( is_month() ) {
      if ( !function_exists('progenitor_build_main_month') ) {
        function progenitor_build_main_month() {

          progenitor_build_main_top();
          progenitor_build_content_month();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_month();
    }

    elseif ( is_page() ) {
      if ( !function_exists('progenitor_build_main_page') ) {
        function progenitor_build_main_page() {

          progenitor_build_main_top();
          progenitor_build_content_page();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_page();
    }

    elseif ( is_single() ) {
      if ( !function_exists('progenitor_build_main_single') ) {
        function progenitor_build_main_single() {

          progenitor_build_main_top();
          progenitor_build_content_single();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_single();
    }

    elseif ( is_tag() ) {
      if ( !function_exists('progenitor_build_main_tag') ) {
        function progenitor_build_main_tag() {

          progenitor_build_main_top();
          progenitor_build_content_tag();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_tag();
    }

    elseif ( is_search() ) {
      if ( !function_exists('progenitor_build_main_search') ) {
        function progenitor_build_main_search() {

          progenitor_build_main_top();
          progenitor_build_content_search();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_search();
    }

    elseif ( is_404() ) {
      if ( !function_exists('progenitor_build_main_404') ) {
        function progenitor_build_main_404() {

          progenitor_build_main_top();
          progenitor_build_content_404();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_404();
    }

    elseif ( !function_exists('progenitor_child_mainbody_specifics') ) {
      function progenitor_child_mainbody_specifics() {
        // Do nothing.
        // This is only here to provide a place for child themes to add
        // their own specific mainbodies in conditional tags.
      }
      progenitor_child_mainbody_specifics();
    }

    // Fallback (default)

    else {
      if ( !function_exists('progenitor_build_main_fallback') ) {
        function progenitor_build_main_fallback() {

          progenitor_build_main_top();
          progenitor_build_content_blog_index();
          progenitor_build_main_bottom();
        }
      }
      progenitor_build_main_fallback();
    }

  }
};
