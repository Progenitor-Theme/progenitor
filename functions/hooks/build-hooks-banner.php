<?php
/**!
 * Build Hooks 2: Banner
 * =====================
 */

/*----------------------------------------------------------------------------*\
  SITE BANNER
\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_banner') ) {
  function progenitor_build_banner() { ?>

    <?php if (has_post_thumbnail()) { ?>

    <div id="site-banner" class="text-center">


      <?php progenitor_build_banner_image(); ?>


    </div>

    <?php } ?>

  <?php }
};

/*----------------------------------------------------------------------------*\
  SITE BANNER IMAGE
  -----------------
  Loads Feature Image
  If Full image is bigger than Large Size then it loads Large Size
  Otherwise it load the Full image
  (This can be modified to allow images to fit the browser window)

\*----------------------------------------------------------------------------*/

if ( !function_exists('progenitor_build_banner_image') ) {
  function progenitor_build_banner_image() {

		//if (wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[1] > 1110)
		if (wp_get_attachment_image_src(get_post_thumbnail_id(), 'full') > 1110) {
      the_post_thumbnail('large');
    } else {
      the_post_thumbnail();
    }
  }
};
