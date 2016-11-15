jQuery(document).ready(function($) {
	/* Slider */
	function prSwiper()
	{
		var t 					= $(this),
			sw 					= t.find('.swiper-container'),
			data 				= {},
			t_d 				= t.data('data');
			t_t 				= t_d.type;

		if(t_t == 'rowSert')
		{
			t_d.direction 				= 'horizontal';
			t_d.loop 					= true;
			t_d.autoplay 				= 5000;
			t_d.spaceBetween 			= 10;
			t_d.slidesPerView 			= 1;
			t_d.prevButton 				= t.closest('.slider').find('.button-prev')[0];
			t_d.nextButton 				= t.closest('.slider').find('.button-next')[0];
		}

		var marinadovSwiper = new Swiper (sw, t_d);
	}
	$('.jqSwiper').each(prSwiper);

	function prSliderAdvantagesNext(slider, current, items, type) {
		animateName = 'fadeInLeft fadeOutLeft fadeInRight fadeOutRight';
		if(type == 'right')
		{
			current++;
			if(current > items) current = 1;
			classNameIn 	= 'fadeInLeft';
			classNameOut 	= 'fadeOutRight';
		}
		if(type == 'left')
		{
			current--;
			if(current <= 0) current = items;
			classNameIn 	= 'fadeInRight';
			classNameOut 	= 'fadeOutLeft';
		}
		slider.find('.item.active .img').addClass(classNameOut);
		slider.find('.item.active .text').delay(500).queue(function(next){
			$(this).addClass(classNameOut);
			next();
		}).delay(500).queue(function(next){
			slider.find('.item').removeClass('active');
			slider.find('.item_' + current).addClass('active');
			slider.find('.item.active .img').removeClass(animateName).addClass(classNameIn);
			slider.find('.item.active .text').removeClass(animateName).addClass(classNameIn);
			next();
		});
		return current;
	}
	function prSliderAdvantages() {
		var slider 		= $(this),
			items 		= slider.find('.item').length,
			current 	= 1,
			dot 		= 0,
			className;

		slider.find('.nav').click(function() {
			current = prSliderAdvantagesNext(slider, current, items, $(this).data('type'));

			dot = current - 1;
			$('.prSlider .dots div').removeClass('active');
			$('.prSlider .dots div:eq(\'' + dot + '\')').addClass('active');
		});
		$('.prSlider .dots div').click(function() {
			var indexDot 	= $(this).index() + 1,
				nextDot 	= indexDot + 1,
				typeDot 	= 'right';

			if(indexDot > current)
			{
				typeDot = 'right';
			}
			else if(indexDot < current)
			{
				typeDot = 'left';
			}
			current = prSliderAdvantagesNext(slider, indexDot, items, typeDot);
			dot = indexDot - 1;
			$('.prSlider .dots div').removeClass('active');
			$('.prSlider .dots div:eq(\'' + dot + '\')').addClass('active');
		});
	}
	$('.prSlider .items').each(prSliderAdvantages);

	$('.rowConditions .item').hover(function() {
		$(this).find('.desc').fadeIn();
	}, function() {
		$(this).find('.desc').fadeOut();
	});

	function prResize(e)
	{
		/* if($(window).height() < 400)
		{
			$('.rowSlider').height(400);
		} */
		if($(window).height() < 815)
		{
			$('.rowSlider').height(815);
		}
		else if($(window).height() > 1055)
		{
			$('.rowSlider').height(1055);
		}
		else
		{
			$('.rowSlider').height($(window).height());
		}
	}
	$(window).on('resize load', function() {
		prResize();
	});
});