$(function() {

	$('li.active').parent().show();
	$('li.active').parent().parent().addClass('active');

	$('#menu-right-vertical-show').click(function() {

		var $menu = $('.vertical-menu-right');
		var $block = $('.vertical-menu-right-show');

		if ($block.hasClass('vertical-block-right-open')) {
			$block.addClass('vertical-block-right-close').removeClass('vertical-block-right-open');
			$menu.addClass('vertical-menu-right-close').removeClass('vertical-menu-right-open');
		} else {
			$block.removeClass('vertical-block-right-close').addClass('vertical-block-right-open');
			$menu.removeClass('vertical-menu-right-close').addClass('vertical-menu-right-open');
		}
	});
	$(window).scroll(function() {
		var height = $(this).scrollTop();
		if (height > 20) {
			$('#menu-right-vertical-up').show();
		} else {
			$('#menu-right-vertical-up').hide();
		}
	});
	$('#menu-right-vertical-up').click(function(){
		$('html,body').animate({ scrollTop: 0 }, 150);
	});
	$('.vertical-menu-right-ul a[href="#"]').click(function() {
		$(this).parent().find('ul').slideToggle(150);
		return false;
	});
});

