<?php
/**!
 * Woocommerce Enqueues
 */

function progenitor_woocommerce_enqueues() {

	wp_register_style('woocommerce-css', get_template_directory_uri() . '/functions/woocommerce/css/woocommerce.css', false, null);
	wp_enqueue_style('woocommerce-css');		
	
	wp_register_script('woocommerce-js', get_template_directory_uri() . '/functions/woocommerce/js/woocommerce.js', false, null, true);
	wp_enqueue_script('woocommerce-js');		
	
};
