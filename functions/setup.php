<?php
/**!
 * Setup
 * =====
 */

if ( ! function_exists('progenitor_setup') ) {
	function progenitor_setup() {
		add_editor_style('theme/css/editor-style.css');

		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');

		update_option('thumbnail_size_w', 350); /* internal max-width of col-3 */
		update_option('small_size_w', 540); /* internal max-width of col-4 */
		update_option('medium_size_w', 730); /* internal max-width of col-8 */
		update_option('large_size_w', 1110); /* internal max-width of col-12 */

		if ( ! isset($content_width) ) {
			$content_width = 1100;
		}

		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		) );

		add_theme_support('automatic-feed-links');

		if ( ! function_exists( 'progenitor_navbar_fallback_left' ) ) {
			function progenitor_navbar_fallback_left() {
				?>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    			<li clas="menu-item"><a class="nav-link" href="<?php echo admin_url('nav-menus.php'); ?>"><?php esc_html_e( 'Add a menu', 'progenitor' ); ?></a></li>
				</ul>
				<?php
			}
		}

		if ( ! function_exists( 'progenitor_navbar_fallback_right' ) ) {
			function progenitor_navbar_fallback_right() {
				?>
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    			<li clas="menu-item"><a class="nav-link" href="<?php echo admin_url('nav-menus.php'); ?>"><?php esc_html_e( 'Add a menu', 'progenitor' ); ?></a></li>
				</ul>
				<?php
			}
		}

		if ( ! function_exists( 'progenitor_post_date' ) ) {
			function progenitor_post_date() {
				if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
					$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
					if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
						$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> <time class="updated" datetime="%3$s">(updated %4$s)</time>';
					}
					$time_string = sprintf( $time_string,
						esc_attr( get_the_date( 'c' ) ),
						get_the_date(),
						esc_attr( get_the_modified_date( 'c' ) ),
						get_the_modified_date()
					);
					printf( '<span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a>',
						_x( 'Posted on', 'Used before publish date.', 'progenitor' ),
						esc_url( get_permalink() ),
						$time_string
					);
				}
			}
		}

		if ( ! function_exists( 'progenitor_author_avatar' ) ) {
			function progenitor_author_avatar() {
				echo get_avatar('', $size = '96');
			}
		}

		if ( ! function_exists( 'progenitor_author_description' ) ) {
			function progenitor_author_description() {
				echo get_the_author_meta('user_description');
			}
		}

		function progenitor_more() {
			if ( is_search() ) {
				return '&hellip; <a href="'. get_permalink() . '">' . _x('more', 'read more after excerpt', 'progenitor') . '</a>';
			} else {
				return '<p><a class="btn btn-primary" href="'. get_permalink() . '">' . _x('Continue reading', 'read more after excerpt', 'progenitor') . ' <i class="fas fa-arrow-right"></i>' . '</a></p>';
			}
		}
		add_filter('excerpt_more', 'progenitor_more');

		function progenitor_prevent_more_jump( $link ) {
		    $offset = strpos( $link, '#more-' );
		    if ($offset) {
		        $end = strpos($link, '"', $offset);
		    }
		    if ($end) {
		        $link = substr_replace($link, '', $offset, $end-$offset);
		    }
		    return $link;
		}
		add_filter('the_content_more_link', 'progenitor_prevent_more_jump');

		function progenitor_reply_link_class($class) {
		    $class = str_replace("class='comment-reply-link", "class='btn btn-sm btn-primary comment-reply-link", $class);
		    return $class;
		}
		add_filter('comment_reply_link', 'progenitor_reply_link_class');

	}
}
add_action('init', 'progenitor_setup');
