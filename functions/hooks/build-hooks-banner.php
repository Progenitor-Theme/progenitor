<?php
/**!
 * Build Hooks 2: Banner
 * =====================
 */

/*----------------------------------------------------------------------------*\
  SITE BANNER
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_banner') ) {
  function progenitor_build_banner() { 

    if (has_post_thumbnail()) {

      echo '<div id="site-banner" class="text-center">';

      progenitor_build_banner_image();

      echo '</div>’;
    }

  }
};

/*----------------------------------------------------------------------------*\
  SITE BANNER IMAGE
  -----------------
  Loads Feature Image:
	> progenitor_build_banner_image('full') [default] : Loads the Full image
	  (then there is a CSS protection added for very large screens)
	> progenitor_build_banner_image('large') : If Full image width is bigger than Large image width then it loads Large image, Else loads the Full image
    (this is due to web performance)
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_banner_image') ) {
  function progenitor_build_banner_image($size='full') {
		$size = strtolower ($size);	
		$img_full = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
		$large_width = get_option('large_size_w');		
		
		if ($size == 'full') {
		  $img_full_1 = $img_full[1] + 1;
      echo '<style>@media only screen and (min-width: '.$img_full_1.'px) {.site-banner-in {width:'.$large_width.'px; margin:0 auto;}} </style>';		
			echo '<div class="site-banner-in">';					
			the_post_thumbnail();
			echo '</div>';			
		}
		else if ($size == 'large') {
			if ($img_full[1] > $large_width) {
				the_post_thumbnail('large');
			} else {
				the_post_thumbnail();
			}
		}
		
  }
};
