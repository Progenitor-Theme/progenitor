<?php
/**!
 * Build Hooks: Sidebars
 * =====================
 */

/*----------------------------------------------------------------------------*\
  SIDEBARS
  --------
  Progenitor has two sidebars, each with one widget area. Both are located after (i.e. below) the main content area:

  <main id="site-main">
    <div id="content">...</div>
    <div id="sidebar-1">...</div>
    <div id="sidebar-2">...</div>
  </main>

  However, Bootstrap grid layout CSS classes are configured so that on lg
  (> 992px) up:

  (1.) If you have no sidebar widgets:

  |-------------------------- #content (full width) ---------------------------|

  (2.) If you have 1 sidebar: content flexbox `col` adjusts to accommodate a
  sidebar that has class `col-lg-4` (i.e. #content becomes 8 columns):

  |---------- #content (col) -------------------------|------ #sidebar-1 ------|
                                                              (col-lg-4)

  (1.) If you have no sidebar widgets, then the #content is full wigth:

  |-- #sidebar-1 --|---------------- #content ----------------|-- #sidebar-2 --|
      (col-lg-4)                                                  (col-lg-4)

  The sidebars are not labeled `-left` and `-right` because RTL and LTR users
  have different orders -- and because you can use Bootstrap css flexbox grid
  column ordering to reorder them.

  If you put no widgets in any sidebar widget area, then that sidebar will not
  be built -- and the sidebar classes will be modified to compensate for its
  absence.

  Also, if you prevent a sidebar from being built in a child theme, then you
  will also want to unregister one of the sidebar widget areas:

  * unregister_sidebar( 'sidebar-1-widget-area' );
  * unregister_sidebar( 'sidebar-2-widget-area' );
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_sidebar_1') ) {
  function progenitor_build_sidebar_1() { ?>

    <?php if( is_active_sidebar('sidebar-1-widget-area') ) { ?>
      <div <?php progenitor_sidebar_1_class(); ?> id="sidebar-1" role="navigation">
        <?php progenitor_action_sidebar_1_top(); ?>

        <?php dynamic_sidebar('sidebar-1-widget-area'); ?>

        <?php progenitor_action_sidebar_1_bottom(); ?>
      </div>

    <?php }
  }
};

if ( !function_exists('progenitor_build_sidebar_2') ) {
  function progenitor_build_sidebar_2() { ?>

    <?php if( is_active_sidebar('sidebar-2-widget-area') ) { ?>
      <div <?php progenitor_sidebar_2_class(); ?> id="sidebar-2" role="navigation">
        <?php progenitor_action_sidebar_2_top(); ?>

        <?php dynamic_sidebar('sidebar-2-widget-area'); ?>

        <?php progenitor_action_sidebar_2_bottom(); ?>
      </div>

    <?php }
  }
};
