// JavaScript Document
  "use strict"
/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();

(function ($) {
	jQuery(document).ready(function($) {
			// Color Changer
			$(".blue" ).click(function(){
				$("#colors" ).attr("href", "css/color-blue.css" );
				return false;
			});
			$(".yelow" ).click(function(){
				$("#colors" ).attr("href", "css/color-yelow.css" );
				return false;
			});
			$(".green" ).click(function(){
				$("#colors" ).attr("href", "css/color-green.css" );
				return false;
			});
			$(".brown" ).click(function(){
				$("#colors" ).attr("href", "css/color-brown.css" );
				return false;
			});
			$(".royal-blue" ).click(function(){
				$("#colors" ).attr("href", "css/color-royal-blue.css" );
				return false;
			});
			$("#reset" ).click(function(){
				$("#style" ).attr("href", "css/style.css" );
				return false;
			});


			// Layout Switcher
			$(".boxed" ).click(function(){
				$("#layout" ).attr("href", "css/boxed.css" );
				return false;
			});

			$("#layout-switcher").on('change', function() {
				$('#layout').attr('href', $(this).val() + '.css');
			});;


			// Style Switcher	
			$('#style-switcher').animate({
				left: '-195px'
			});

			$('#style-switcher h2 a').click(function(e){
				e.preventDefault();
				var div = $('#style-switcher');
				console.log(div.css('left'));
				if (div.css('left') === '-195px') {
					$('#style-switcher').animate({
						left: '0px'
					}); 
				} else {
					$('#style-switcher').animate({
						left: '-195px'
					});
				}
			})

			$('.colors li a').click(function(e){
				e.preventDefault();
				$(this).parent().parent().find('a').removeClass('active');
				$(this).addClass('active');
			})

			$('.bg li a').click(function(e){
				e.preventDefault();
				$(this).parent().parent().find('a').removeClass('active');
				$(this).addClass('active');
				var bg = $(this).css('backgroundImage');
				$('body').css('backgroundImage',bg)
			})

			$('.bgsolid li a').click(function(e){
				e.preventDefault();
				$(this).parent().parent().find('a').removeClass('active');
				$(this).addClass('active');
				var bg = $(this).css('backgroundColor');
				$('body').css('backgroundColor',bg).css('backgroundImage','none')
			})

			$('#reset a').click(function(e){
				var bg = $(this).css('backgroundImage');
				$('body').css('backgroundImage','url(images/bg_body.jpg)')
			})


		});
})(jQuery);