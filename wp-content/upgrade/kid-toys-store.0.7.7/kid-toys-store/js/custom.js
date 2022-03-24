jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,                            
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'                        
	});
});

function kid_toys_store_menu_open() {
	jQuery(".side-menu").addClass('open');
}
function kid_toys_store_menu_close() {
	jQuery(".side-menu").removeClass('open');
}

function kid_toys_store_search_show() {
	jQuery(".search-outer").addClass('show');
	jQuery(".search-outer").fadeIn();
}
function kid_toys_store_search_hide() {
	jQuery(".search-outer").removeClass('show');
	jQuery(".search-outer").fadeOut();
}

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

	// Back to top
	jQuery(document).ready(function () {
	    jQuery(window).scroll(function () {
	        if (jQuery(this).scrollTop() > 0) {
	            jQuery('.scrollup').fadeIn();
	        } else {
	            jQuery('.scrollup').fadeOut();
	        }
	    });
	    jQuery('.scrollup').click(function () {
	        jQuery("html, body").animate({
	            scrollTop: 0
	        }, 600);
	        return false;
	    });
	});

	// Window load function
	window.addEventListener('load', (event) => {
		$(".preloader").delay(2000).fadeOut("slow");
	});

})( jQuery );

( function( window, document ) {
	function kid_toys_store_keepFocusInMenu() {
		document.addEventListener( 'keydown', function( e ) {
			const kid_toys_store_nav = document.querySelector( '.side-menu' );

			if ( ! kid_toys_store_nav || ! kid_toys_store_nav.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...kid_toys_store_nav.querySelectorAll( 'input, a, button' )],
				kid_toys_store_lastEl = elements[ elements.length - 1 ],
				kid_toys_store_firstEl = elements[0],
				kid_toys_store_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && kid_toys_store_lastEl === kid_toys_store_activeEl ) {
				e.preventDefault();
				kid_toys_store_firstEl.focus();
			}

			if ( shiftKey && tabKey && kid_toys_store_firstEl === kid_toys_store_activeEl ) {
				e.preventDefault();
				kid_toys_store_lastEl.focus();
			}
		} );
	}

	function kid_toys_store_keepfocus_search() {
		document.addEventListener( 'keydown', function( e ) {
			const kid_toys_store_search = document.querySelector( '.search-outer' );

			if ( ! kid_toys_store_search || ! kid_toys_store_search.classList.contains( 'show' ) ) {
				return;
			}

			const elements = [...kid_toys_store_search.querySelectorAll( 'input, a, button' )],
				kid_toys_store_lastEl = elements[ elements.length - 1 ],
				kid_toys_store_firstEl = elements[0],
				kid_toys_store_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && kid_toys_store_lastEl === kid_toys_store_activeEl ) {
				e.preventDefault();
				kid_toys_store_firstEl.focus();
			}

			if ( shiftKey && tabKey && kid_toys_store_firstEl === kid_toys_store_activeEl ) {
				e.preventDefault();
				kid_toys_store_lastEl.focus();
			}
		} );
	}

	kid_toys_store_keepFocusInMenu();

	kid_toys_store_keepfocus_search();
} )( window, document );