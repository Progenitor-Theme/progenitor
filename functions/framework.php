<?php
/**!
 * CSS/JS Framework (default is Bootstrap 4)
 */

if ( !function_exists('progenitor_framework') ) {
  function progenitor_framework() {

    require get_template_directory() . '/functions/bootstrap-4/bootstrap-4.php';
  }
};
