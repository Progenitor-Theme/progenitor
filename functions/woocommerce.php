<?php
/**!
 * Woocommerce
 */



if ( !function_exists('progenitor_woocommerce') ) {
  function progenitor_woocommerce() {

    require get_template_directory() . '/functions/woocommerce/woocommerce.php';
  }
};
