<?php
/**!
 * Font Awesome 5 Enqueues
 */

function progenitor_icons_enqueues() {

  wp_register_script('font-awesome-5-config-js', get_template_directory_uri() . '/functions/font-awesome-5/config.js', false, null, null);
  wp_enqueue_script('font-awesome-5-config-js');

  wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', false, '5.0.6', null);
  wp_enqueue_script('font-awesome');
};
