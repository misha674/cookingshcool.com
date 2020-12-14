/**
 * https://github.com/LiranCohen/stickUp
 * licensed under GNU GPL
 * Copyright @LiranCohen
 */

jQuery(
function($) {

	$(document).ready(function(){
		
		var headerHeight = $('#masthead').height();

		$.fn.stickUp = function( options ) {
			// adding a class to users div
			$(this).addClass('stuckMenu');
		}
		$(document).on('scroll', function() {
			varscroll = parseInt($(document).scrollTop());

			if(headerHeight < varscroll){
				$('.stuckMenu').addClass('isStuck');
			};

			if(varscroll < headerHeight){
				$('.stuckMenu').removeClass('isStuck');
			};

		});
	});

});
