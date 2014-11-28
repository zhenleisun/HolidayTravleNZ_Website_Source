jQuery(document).ready( function () {

	//For Menu Bar
	jQuery('#site-navigation li').find('ul').hide();
		jQuery('#site-navigation li').hoverIntent({
			over: function(){
				jQuery(this).find('> ul').fadeIn('slow');
			},
			out: function(){
				jQuery(this).find('ul').fadeOut(200);
			}
			});	
		
		jQuery('.menu-toggle').toggle(function() {
				jQuery('#site-navigation ul.menu').slideDown();
				jQuery('#site-navigation div.menu').fadeIn();
			},
			function() {
				jQuery('#site-navigation ul.menu').hide();
				jQuery('#site-navigation div.menu').hide();
		});
		
	jQuery('#site-navigation li').find('> ul').parent().find('> a').addClass('dropdown');	
	jQuery('#site-navigation li ul.sub-menu li').find('> ul').parent().find('> a').addClass('dropright');
	
	});//end ready