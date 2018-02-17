<?php
/**!
 * Enqueues for supporting old browsers, feature detection, etc.
 */

if ( ! function_exists('progenitor_enqueues_supporting') ) {
  function progenitor_enqueues_supporting() {

    // SUPPORTING JS
    // =============

    wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
    wp_enqueue_script('modernizr');

  }
};
add_action('wp_enqueue_scripts', 'progenitor_enqueues_supporting', 100);
