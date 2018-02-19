<?php
/**!
 * Fancybox Enqueues
 */

function progenitor_fancybox_enqueues() {

	wp_register_style('fancybox-css', get_template_directory_uri() . '/functions/fancybox/css/jquery.fancybox.min.css', false, null);
	wp_enqueue_style('fancybox-css');		

	wp_register_script('fancybox-pack-js', get_template_directory_uri() . '/functions/fancybox/js/jquery.fancybox.pack.js', false, null, true);
	wp_enqueue_script('fancybox-pack-js');		
	
	wp_register_script('fancybox-js', get_template_directory_uri() . '/functions/fancybox/js/fancybox.js', false, null, true);
	wp_enqueue_script('fancybox-js');		
	
};
