(function ($) {

	'use strict';

	$(document).ready(function () {

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

    // Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

	});

} (jQuery) );
