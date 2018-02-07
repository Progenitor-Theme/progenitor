<?php

if ( ! function_exists('progenitor_enqueues') ) {
	function progenitor_enqueues() {

		// JQUERY 3
		// ========

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		// SUPPORTING JS
		// =============

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		// Popper is needed for Bootstrap popovers, tooltips and navbar collapsed show/hide hamburger

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, '1.12.9', true);
		wp_enqueue_script('popper');

		// BOOTSTRAP 4
		// ===========

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css', false, '4.0.0', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js', false, '4.0.0', true);
		wp_enqueue_script('bootstrap-js');

		// FONT AWESOME 5
		// ==============

		wp_register_script('font-awesome-config-js', get_template_directory_uri() . '/theme/js/font-awesome-config.js', false, null, null);
		wp_enqueue_script('font-awesome-config-js');

		wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.4/js/all.js', false, '5.0.4', null);
		wp_enqueue_script('font-awesome');

		// PROGENITOR
		// ==========

	  wp_register_style('progenitor-css', get_template_directory_uri() . '/theme/css/progenitor.css', false, null);
		wp_enqueue_style('progenitor-css');

		wp_register_script('progenitor-js', get_template_directory_uri() . '/theme/js/progenitor.js', false, null, true);
		wp_enqueue_script('progenitor-js');

		// COMMENTS
		// ========

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'progenitor_enqueues', 100);
