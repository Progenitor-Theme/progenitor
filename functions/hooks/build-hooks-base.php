<?php
/**!
 * Build Hooks 1: Base
 * ===================
 */

/*----------------------------------------------------------------------------*\
  PROGENITOR master build hook
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor') ) {
  function progenitor() {

    progenitor_build_html_head();

    progenitor_build_body_top();

    progenitor_build_header();

    progenitor_build_mainbody();

    progenitor_build_footer();

    progenitor_build_body_bottom();
  }
};

/*----------------------------------------------------------------------------*\
  DOCTYPE, HTML and HEAD tags
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_html_head') ) {
  function progenitor_build_html_head() { ?>

    <!DOCTYPE html>
    <html class="no-js" <?php language_attributes(); ?>>
    <head>
      <?php progenitor_action_head_top(); ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php progenitor_action_head_bottom(); ?>
      <?php wp_head(); ?>
    </head>

  <?php }
};

/*----------------------------------------------------------------------------*\
  BODY TOP and BODY BOTTOM
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_body_top') ) {
  function progenitor_build_body_top() { ?>
    <body <?php progenitor_body_class(); ?>>
    <?php progenitor_action_body_top(); ?>
  <?php }
};

if ( !function_exists('progenitor_build_body_bottom') ) {
  function progenitor_build_body_bottom() { ?>
    <?php progenitor_action_body_bottom(); ?>
    <?php wp_footer(); ?>
    </body>
    </html>
  <?php }
};
