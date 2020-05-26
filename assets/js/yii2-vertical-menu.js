/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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
	$('.vertical-menu-ul a[href="#"]').click(function() {
		$(this).parent().find('ul').slideToggle(150);
		return false;
	});
});

