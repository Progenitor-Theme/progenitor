<?php

if ( ! function_exists('progenitor_enqueues') ) {
	function progenitor_enqueues() {


		// ICONS (default is Font Awesome 5)
		// =================================

		if ( function_exists('progenitor_icons_enqueues') ) {
			progenitor_icons_enqueues();
		}

		// CSS/JS FRAMEWORK (default is Bootstrap 4)
		// =========================================

		if ( function_exists('progenitor_framework_enqueues') ) {
			progenitor_framework_enqueues();
		}

		// PROGENITOR
		// ==========

	  wp_register_style('progenitor-css', get_template_directory_uri() . '/theme/css/progenitor.css', false, null);
		wp_enqueue_style('progenitor-css');

		// COMMENTS
		// ========

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'progenitor_enqueues', 100);
