$(function() {

	$('li.active').parent().show();
	$('li.active').parent().parent().addClass('active');

	$('#menu-right-show').click(function() {

		var $menu = $('.right-menu');
		var $block = $('.right-menu-show');

		if ($block.hasClass('right-block-open')) {
			$block.addClass('right-block-close').removeClass('right-block-open');
			$menu.addClass('right-menu-close').removeClass('right-menu-open');
		} else {
			$block.removeClass('right-block-close').addClass('right-block-open');
			$menu.removeClass('right-menu-close').addClass('right-menu-open');
		}
	});
	$(window).scroll(function() {
		var height = $(this).scrollTop();
		if (height > 20) {
			$('#menu-right-up').show();
		} else {
			$('#menu-right-up').hide();
		}
	});
	$('#menu-right-up').click(function(){
		$('html,body').animate({ scrollTop: 0 }, 150);
	});
	$('a[href="#"]').click(function() {
		$(this).parent().find('ul').slideToggle(150);
		return false;
	});
});

