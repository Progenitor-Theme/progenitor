<?php
/**!
 * Progenitor CSS Class Hooks
 * ==========================
 * Designed to be overridable by a child theme.
 */

/*----------------------------------------------------------------------------*\
  BODY TAG
  --------
  Use this instead of the WordPress body_class(); so that you can add your own
  classes too.

  Note: ensure that you have a space after your added class/classes. Example:
    echo 'class="example ' . join( ' ', get_body_class( $class ) ) . '"';
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_body_class') ) {
  function progenitor_body_class( $class = '', $post_id = null ) {
    echo 'class="' . join( ' ', get_body_class( $class ) ) . '"';
  }
};

/*----------------------------------------------------------------------------*\
  SITE NAVBAR
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_navbar_class') ) {
  function progenitor_navbar_class() {
    echo 'class="navbar navbar-expand-md navbar-dark bg-dark"';
  }
};

if ( !function_exists('progenitor_navbar_inner_class') ) {
  function progenitor_navbar_inner_class() {
    echo 'class="container-responsive"';
  }
};

if ( !function_exists('progenitor_navbar_search_btn_class') ) {
  function progenitor_navbar_search_btn_class() {
    echo 'class="btn btn-outline-secondary my-2 my-sm-0"';
  }
};


/*----------------------------------------------------------------------------*\
  MAINBODY
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_mainbody_wrapper_class') ) {
  function progenitor_mainbody_wrapper_class() {
    echo 'class="pt-5 pb-5"';
  }
};

/*----------------------------------------------------------------------------*\
  CONTENT
\*----------------------------------------------------------------------------*/

// Note: The main content Bootstrap flexbox column does not need to have "span"
// numerals or specified breakpoint(s), because it will expand to occupy any
// available width in the row. You only need to think about controlling the
// width of the sidebars.

if ( !function_exists('progenitor_content_class') ) {
  function progenitor_content_class() {
    echo 'class="mainbody-content col"';
  }
};

if ( !function_exists('progenitor_article_header_class') ) {
  function progenitor_article_header_class() {
    echo 'class="mb-4"';
  }
};

// Article Post class -- use this instead of the WordPress post_class();
// so that you can add your own classes too

if ( !function_exists('progenitor_article_post_class') ) {
  function progenitor_article_post_class( $class = '', $post_id = null ) {
    if ( is_single() ) {
      echo 'class="' . join( ' ', get_post_class( $class, $post_id ) ) . '"';
    } else {
      echo 'class="mb-5 ' . join( ' ', get_post_class( $class, $post_id ) ) . '"';
    }
  }
};


if ( !function_exists('progenitor_article_main_class') ) {
  function progenitor_article_main_class() {
    // Do nothing.
    // This empty function  must exist, because it is called --
    // do not remove it.
  }
};

/*----------------------------------------------------------------------------*\
  SIDEBARS
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_sidebar_1_class') ) {
  function progenitor_sidebar_1_class() {
    echo 'class="sidebar-1 ';
    if( is_active_sidebar('sidebar-2-widget-area') ) {
      echo 'col-sm-3';
    } else {
      echo 'col-sm-4';
    }
    echo '"';
  }
};

if ( !function_exists('progenitor_sidebar_2_class') ) {
  function progenitor_sidebar_2_class() {
    echo 'class="sidebar-2 ';
    if( is_active_sidebar('sidebar-1-widget-area') ) {
      echo 'col-sm-3';
    } else {
      echo 'col-sm-4';
    }
    echo '"';
  }
};

/*----------------------------------------------------------------------------*\
  FOOTER
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_footer_class') ) {
  function progenitor_action_footer_class() {
    echo 'class="footer-wrapper pt-5 bg-light"';
  }
};

if ( !function_exists('progenitor_footer_bottom_class') ) {
  function progenitor_footer_bottom_class() {
    echo 'class="mt-4 p-3 bg-dark text-light"';
  }
};
