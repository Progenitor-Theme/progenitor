<?php
/**!
 * Build Hooks 3: Mainbody
 * =======================
 */

/*----------------------------------------------------------------------------*\
  MAINBODY
  --------
  By default, all Progenitor templates use the same `#mainbody` with different `#content` inside (depending on what webpage is being served).

  <body>
    <header id="site-header">...</header>

    <div id="mainbody">
      <div id="sidebar-1">...</div>

      <div id="content">...</div>

      <div id="sidebar-2">...</div>
    </div>

    <footer id="site-footer">...</footer>
  </body>

  `#mainbody` is being used for the flexbox sticky footer CSS.
  (Note: The sticky footer is pushed down by the WP admin bar -- it is OK when
  you are not logged in, or when youhide the WP admin bar.)
\*----------------------------------------------------------------------------*/

// Mainbody top (including sidebar-1 before the `#content`)

if ( !function_exists('progenitor_build_mainbody_top') ) {
  function progenitor_build_mainbody_top() { ?>
    <div id="mainbody" <?php progenitor_mainbody_wrapper_class(); ?>>
      <?php progenitor_action_mainbody_top(); ?>
      <div class="container-responsive">
        <div class="row">

          <?php progenitor_build_sidebar_1(); ?>
  <?php }
};

// Mainbody bottom (including sidebar-2 after the `#content`)

if ( !function_exists('progenitor_build_mainbody_bottom') ) {
  function progenitor_build_mainbody_bottom() { ?>
          <?php progenitor_build_sidebar_2(); ?>

        </div><!-- /.row -->
      </div><!-- /.container -->
      <?php progenitor_action_mainbody_bottom(); ?>
    </div><!-- /#mainbody -->
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

if ( !function_exists('progenitor_build_mainbody') ) {
  function progenitor_build_mainbody() {

    // Homepage is the blog-index

    if ( is_front_page() && is_home() ) {
      if ( !function_exists('progenitor_build_mainbody_blog_index') ) {
        function progenitor_build_mainbody_blog_index() {

          progenitor_build_mainbody_top();
          progenitor_build_content_blog_index();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_blog_index();
    }

    // Homepage is a page

    elseif ( is_front_page() ) {
      if ( !function_exists('progenitor_build_mainbody_frontpage') ) {
        function progenitor_build_mainbody_frontpage() {

          progenitor_build_mainbody_top();
          progenitor_build_content_frontpage();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_frontpage();
    }

    // Homepage is either the blog-index or a page (non-specific)

    elseif ( is_home() ) {
      if ( !function_exists('progenitor_build_mainbody_home') ) {
        function progenitor_build_mainbody_home() {

          progenitor_build_mainbody_top();
          progenitor_build_content_blog_index();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_home();
    }

    elseif ( is_author() ) {
      if ( !function_exists('progenitor_build_mainbody_author') ) {
        function progenitor_build_mainbody_author() {

          progenitor_build_mainbody_top();
          progenitor_build_content_author();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_author();
    }

    elseif ( is_category() ) {
      if ( !function_exists('progenitor_build_mainbody_category') ) {
        function progenitor_build_mainbody_category() {

          progenitor_build_mainbody_top();
          progenitor_build_content_category();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_category();
    }

    elseif ( is_month() ) {
      if ( !function_exists('progenitor_build_mainbody_month') ) {
        function progenitor_build_mainbody_month() {

          progenitor_build_mainbody_top();
          progenitor_build_content_month();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_month();
    }

    elseif ( is_page() ) {
      if ( !function_exists('progenitor_build_mainbody_page') ) {
        function progenitor_build_mainbody_page() {

          progenitor_build_mainbody_top();
          progenitor_build_content_page();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_page();
    }

    elseif ( is_single() ) {
      if ( !function_exists('progenitor_build_mainbody_single') ) {
        function progenitor_build_mainbody_single() {

          progenitor_build_mainbody_top();
          progenitor_build_content_single();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_single();
    }

    elseif ( is_tag() ) {
      if ( !function_exists('progenitor_build_mainbody_tag') ) {
        function progenitor_build_mainbody_tag() {

          progenitor_build_mainbody_top();
          progenitor_build_content_tag();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_tag();
    }

    elseif ( is_search() ) {
      if ( !function_exists('progenitor_build_mainbody_search') ) {
        function progenitor_build_mainbody_search() {

          progenitor_build_mainbody_top();
          progenitor_build_content_search();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_search();
    }

    elseif ( is_404() ) {
      if ( !function_exists('progenitor_build_mainbody_404') ) {
        function progenitor_build_mainbody_404() {

          progenitor_build_mainbody_top();
          progenitor_build_content_404();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_404();
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
      if ( !function_exists('progenitor_build_mainbody_fallback') ) {
        function progenitor_build_mainbody_fallback() {

          progenitor_build_mainbody_top();
          progenitor_build_content_blog_index();
          progenitor_build_mainbody_bottom();
        }
      }
      progenitor_build_mainbody_fallback();
    }

  }
};
