define(['jquery','bootstrap','jquery_cookie'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			// topNavToSelect();
			NavToSelect();
			cartContent();
			dropdownMainNav();
			openSidePanel();
			// rangePriceSlider();
		};

		var topNavToSelect = function() {
			// building select menu
			$('<select class="upper-nav" />').appendTo('.topHeader .container');

			// building an option for select menu
			$('<option />', {
				'selected': 'selected',
				'value' : '',
				'text': 'Choise Page...'
			}).appendTo('.topHeader .container select');

			$('.topHeader ul.inline li a').each(function(){
				var target = $(this);

				$('<option />', {
					'value' : target.attr('href'),
					'text': target.text()
				}).appendTo('.topHeader .container select');
			});

			// on clicking on link
			$('.topHeader .container select').on('change',function(){
				window.location = $(this).find('option:selected').val();
			});
		};

		// building select .navbar for mobile width only
		var NavToSelect = function() {
			// building select menu
			$('<select />').appendTo('.navbar');

			// building an option for select menu
			$('<option />', {
				'selected': 'selected',
				'value' : '',
				'text': '-- Menu --'
			}).appendTo('.navbar select');

			$('.navbar ul.nav li a').each(function(){
				var target = $(this);

				$('<option />', {
					'value' : target.attr('href'),
					'text': target.text()
				}).appendTo('.navbar select');
			});

			// on clicking on link
			$('.navbar select').on('change',function(){
				window.location = $(this).find('option:selected').val();
			});
		};
		
		// stop escaping on clickin on downdown
		var cartContent = function() {
			var $cartContent = $('.cart-content');

			$cartContent.find('table').click(function(e){
				e.stopPropagation();
			});
		};

		// dropdown mainnav
		var dropdownMainNav = function() {
			var navLis = $('div.navbar > ul.nav > li');
			navLis.hover(
				function () {
					// hide the css default behavir
					$(this).children('ul').css('display', 'none');

					//show its submenu
					$(this).children('ul').slideDown(150);
				}, 
				function () {
					//hide its submenu
					$(this).children('ul').slideUp(350);
				}
			);
		};

		// open and hide the side panel
		var openSidePanel = function() {
			var widgetToggleLink = $('.switcher > a.Widget-toggle-link'),$switcher = $(".switcher");

			widgetToggleLink.on('click', function(e){
				e.preventDefault();
				var left = $('.switcher').css('left');

				if(left <= '-170px'){
					$switcher.animate({
						left: 0
					}, 200, function(){
						$(this).find('a.Widget-toggle-link').text('-');
					});
				}else{
					$switcher.animate({
						left: '-170px'
					}, 200, function(){
						$(this).find('a.Widget-toggle-link').text('+');
					});
				}
			});
		};

		// range price product
		var rangePriceSlider = function() {
			var $slideRange = $("#slider-range"), amount = $( "#amount" );

			$slideRange.slider({
			  range: true,
			  min: 0,
			  max: 500,
			  values: [ 75, 300 ],
			  slide: function( event, ui ) {
				amount.val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			  }
			});
			amount.val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $slideRange.slider( "values", 1 ) );
		};
	};
});