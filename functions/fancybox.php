<?php
/**!
 * Fancybox
 */

if ( !function_exists('progenitor_fancybox') ) {
  function progenitor_fancybox() {
    
		// Add title to anchor from image title (only works with images which are placed in a native WP Gallery)
		// https://wordpress.org/support/topic/add-the-title-of-an-image-to-the-image-link-in-gallery	
		function add_title_attachment_link($link, $id = null) {
			$id = intval( $id );
			$_post = get_post( $id );
			$post_title = esc_attr( $_post->post_title );
			return str_replace('<a href', '<a title="'. $post_title .'" href', $link);	
		}
		add_filter('wp_get_attachment_link', 'add_title_attachment_link', 10, 2);	    

    require get_template_directory() . '/functions/fancybox/fancybox.php';
  }
};
