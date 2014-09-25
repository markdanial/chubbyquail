(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		$('.clare').magnificPopup({
		    items: [
		      {
		        src: 'http://vimeo.com/101696249',
		        type: 'iframe' // this overrides default type
		      }
		    ]
		});
		$('.hollen').magnificPopup({
		    items: [
		      {
		        src: 'http://vimeo.com/106765443',
		        type: 'iframe' // this overrides default type
		      }
		    ]
		});
		$('.lindsay').magnificPopup({
		    items: [
		      {
		        src: 'http://vimeo.com/100383028',
		        type: 'iframe' // this overrides default type
		      }
		    ]
		});
		$('.rosie').magnificPopup({
		    items: [
		      {
		        src: 'http://vimeo.com/103440166',
		        type: 'iframe' // this overrides default type
		      }
		    ]
		});
		$('.julie').magnificPopup({
		    items: [
		      {
		        src: 'http://vimeo.com/92475943',
		        type: 'iframe' // this overrides default type
		      }
		    ]
		});

		 $(".hero-text").click(function(event){
	         event.preventDefault();

	         //go to destination
	         $('html,body').animate({scrollTop: $('#featured').offset().top}, 1000);
	     });
		
	});
	
})(jQuery, this);
