<?php
/**!
 * Bootstrap 4 Enqueues
 */

function progenitor_framework_enqueues() {

  // JQUERY 3
  // ========

  wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
  wp_enqueue_script('jquery-3.3.1');

  // POPPER
  // ======
  // Popper is needed for Bootstrap popovers, tooltips and collapsed navbar show/hide hamburger

  wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false, '1.14.0', true);
  wp_enqueue_script('popper');

  // BOOTSTRAP 4
  // ===========

  wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css', false, '4.1.0', null);
  wp_enqueue_style('bootstrap-css');

  wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js', false, '4.1.0', true);
  wp_enqueue_script('bootstrap-js');

  wp_register_script('bootstrap-4-wp-js', get_template_directory_uri() . '/functions/bootstrap-4/bootstrap-4-wp.js', false, null, true);
  wp_enqueue_script('bootstrap-4-wp-js');
};
