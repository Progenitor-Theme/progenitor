;(function ($) {
	
	"use strict";
  
    $(document).ready(function () {
																
/*** Some of this code is already in: functions/boostrap-4/bootstrap-4-wp.js so pending for Simon on what to do:  

        // Adding Bootstrap classes to the Comments stuff
        $(".commentlist li").addClass("panel panel-default");
        $(".comment-reply-link").addClass("btn btn-default");
  
        // Forms
        $('select, input[type=text], input[type=email], input[type=password], textarea, input[type=tel], input[type=number]').addClass('form-control');
        $('input[type=submit]').addClass('btn btn-primary');
***/  

        // WOOCOMMERCE restyling
        // Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
        $('div.woocommerce').wrapInner('<article></article>');
        $('.woocommerce-pagination ul').css({"border": 0}).removeClass().addClass('pagination pagination-lg');
        $('.woocommerce-pagination li').css({border: 0});
        $('.woocommerce-pagination .next').text('»');
        $('.woocommerce-pagination .prev').text('«');
        $('.woocommerce-pagination .current').removeClass().addClass('active').css({background: "#e7e7e7"});
        $('.woocommerce-message a.button.wc-forward').removeClass().addClass('btn btn-success').append('&nbsp; <i class="glyphicon glyphicon-arrow-right"></i>').css({display: "block", float: "right", marginTop: -7});
        $('.woocommerce a.button.wc-backward').removeClass().addClass('btn btn-info').prepend('<i class="glyphicon glyphicon-arrow-left"></i> &nbsp;').css({display: "inline-block"});
        $('.woocommerce-message').removeClass().addClass('alert alert-success');
        $('.woocommerce-info').removeClass().addClass('alert alert-warning');
        $('.woocommerce .cart button').removeClass().addClass('btn btn-primary').css({height: 28, paddingTop: 3});
        $('.woocommerce .shipping-calculator-button').addClass('btn btn-primary btn-block').css({height: 34});
        $('.shipping-calculator-form .button').removeClass().addClass('btn btn-success btn-block');
        $('.woocommerce input[type=submit]').removeClass().addClass('btn btn-primary').css({height: 34});
        $('.woocommerce input[name=proceed]').removeClass().addClass('btn btn-success');
    });
  
}(jQuery));
