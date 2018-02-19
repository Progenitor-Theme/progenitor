		(function ($) {
			'use strict';

			// Make all images that link to images into a lightbox
			$("a[href$='.jpg'],a[href$='.png'],a[href$='.gif'],a[href$='.jpeg']").fancybox();

			// Make all images within a Wordpress gallery that link to an image into a lightbox gallery
			$(".gallery a[href$='.jpg'],.gallery a[href$='.png'],.gallery a[href$='.gif'],.gallery a[href$='.jpeg']").attr('rel', 'gallery');

			// Make all items in the $fancybox_class var into a lightbox
			$(".fancybox").fancybox();

		})(jQuery);
