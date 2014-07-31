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
		$('.lindsay').magnificPopup({
		    items: [
		      {
		        src: 'http://vimeo.com/100383028',
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
		
	});
	
})(jQuery, this);
