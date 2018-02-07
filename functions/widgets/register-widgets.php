<?php
/**!
 * Progenitor Widget Areas
 */

if ( ! function_exists('progenitor_widgets_init') ) {
  function progenitor_widgets_init() {

    // Sidebar 1 (one widget area)

    register_sidebar( array(
      'name'            => __( 'Sidebar 1', 'progenitor' ),
      'id'              => 'sidebar-1-widget-area',
      'description'     => __( 'Before the mainbody-content.', 'progenitor' ),
      'before_widget'   => '<div class="%1$s %2$s">',
      'after_widget'    => '</div>',
      'before_title'    => '<h4>',
      'after_title'     => '</h4>',
    ) );

    // Sidebar 2 (one widget area)

    register_sidebar( array(
      'name'            => __( 'Sidebar 2', 'progenitor' ),
      'id'              => 'sidebar-2-widget-area',
      'description'     => __( 'After the mainbody-content.', 'progenitor' ),
      'before_widget'   => '<div class="%1$s %2$s">',
      'after_widget'    => '</div>',
      'before_title'    => '<h2>',
      'after_title'     => '</h2>',
    ) );

    // Footer (one widget area)

    register_sidebar( array(
      'name'            => __( 'Footer', 'progenitor' ),
      'id'              => 'footer-widget-area',
      'description'     => __( 'Each widget you place in here will show in its own column within the footer. E.g. 3 footer widgets in 3 columns, each one-third width.', 'progenitor' ),
      'before_widget'   => '<div class="%1$s %2$s col-sm">',
      'after_widget'    => '</div>',
      'before_title'    => '<h2>',
      'after_title'     => '</h2>',
    ) );

  }
}
add_action( 'widgets_init', 'progenitor_widgets_init' );
