$(function() {

	$('li.active').parent().show();
	$('li.active').parent().parent().addClass('active');

	$('#menu-vertical-show').click(function() {

		var $menu = $('.vertical-menu');
		var $block = $('.vertical-menu-show');

		if ($block.hasClass('vertical-block-open')) {
			$block.addClass('vertical-block-close').removeClass('vertical-block-open');
			$menu.addClass('vertical-menu-close').removeClass('vertical-menu-open');
		} else {
			$block.removeClass('vertical-block-close').addClass('vertical-block-open');
			$menu.removeClass('vertical-menu-close').addClass('vertical-menu-open');
		}
	});
	$(window).scroll(function() {
		var height = $(this).scrollTop();
		if (height > 20) {
			$('#menu-vertical-up').show();
		} else {
			$('#menu-vertical-up').hide();
		}
	});
	$('#menu-vertical-up').click(function(){
		$('html,body').animate({ scrollTop: 0 }, 150);
	});
	$('a[href="#"]').click(function() {
		$(this).parent().find('ul').slideToggle(150);
		return false;
	});
});

