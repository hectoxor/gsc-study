(function($) {
$(function() {

	function createCookie(name,value,days) {
		if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}
	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}
	function eraseCookie(name) {
		createCookie(name,"",-1);
	}

	$('ul.contact-tab__head').each(function(i) {
		var cookie = readCookie('tabCookie' + i);
		if (cookie) {
			$(this).find('div').removeClass('active').eq(cookie).addClass('active')
				.closest('div.contact-tab').find('div.contact-tab__item').removeClass('active').eq(cookie).addClass('active');
		}
	});

	$('ul.contact-tab__head').on('click', 'li:not(.active)', function() {
		$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('div.contact-tab').find('div.contact-tab__item').removeClass('active').eq($(this).index()).addClass('active');
		var ulIndex = $('ul.contact-tab__head').index($(this).parents('ul.contact-tab__head'));
		eraseCookie('tabCookie' + ulIndex);
		createCookie('tabCookie' + ulIndex, $(this).index(), 365);
		
	});

	$('ul.select-contact-block').each(function(i) {
		var cookie = readCookie('tabCookie' + i);
		if (cookie) {
			$(this).find('li').removeClass('select-contact--active').eq(cookie).addClass('select-contact--active')
				.closest('div.contact-tab__item').find('div.select-contact-map').removeClass('select-contact-map--active').eq(cookie).addClass('select-contact-map--active');
		}
	});

	$('ul.select-contact-block').on('click', 'li:not(.select-contact--active)', function() {
		$(this)
			.addClass('select-contact--active').siblings().removeClass('select-contact--active')
			.closest('div.contact-tab__item').find('div.select-contact-map').removeClass('select-contact-map--active').eq($(this).index()).addClass('select-contact-map--active');
		var ulIndex = $('ul.select-contact-block').index($(this).parents('ul.select-contact-block'));
		eraseCookie('tabCookie' + ulIndex);
		createCookie('tabCookie' + ulIndex, $(this).index(), 365);
		
	});


	

	

	

});
})(jQuery);