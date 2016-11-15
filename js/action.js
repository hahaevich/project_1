fbImages 	= 'a[href$=".jpeg"]:not(.nofancybox),a[href$=".JPEG"]:not(.nofancybox),a[href$=".jpg"]:not(.nofancybox),a[href$=".JPG"]:not(.nofancybox),a[href$=".gif"]:not(.nofancybox),a[href$=".GIF"]:not(.nofancybox),a[href$=".png"]:not(.nofancybox),a[href$=".PNG"]:not(.nofancybox),a[href$=".bmp"]:not(.nofancybox),a[href$=".BMP"]:not(.nofancybox)',
fbSetting 	= {
	minHeight	: 10,
	helpers:
	{
		overlay:
		{
			locked: false,
			css:
			{
				'background' : 'rgba(0, 0, 0, 0.4)',
			}
		}
	},
	beforeShow: function(){
		$('body').addClass('hidden');
	},
	afterShow: function()
	{
		$('input[type="tel"]').each(prMaskPhone);
	},
	beforeClose: function(){
		$('body').removeClass('hidden');
	}
};

function prModal(data)
{
	$.fancybox(data, fbSetting);
}
function prSend(e)
{
	e.preventDefault();

	var t 		= $(this);
	var t_n 	= t.val();
	var t_p 	= t.closest('form');
	var t_d 	= t_p.serialize();

	if(t.hasClass('disabled'))
		return false;

	t.addClass('disabled').val('Загрузка...');

	t_p.find('.btn').removeClass('err animated shake');
	t_p.find('label').removeClass('err animated shake');

	$.post(
		'include/send.php',
		t_d,
		function(request)
		{
			t.removeClass('disabled').val(t_n);

			var result = JSON.parse(request);

			if(result.success === true)
			{
				t_p.find('.forSuccess').val('');
			}

			if(result.load != false)
			{
				prLoad({'TYPE' : result.load, 'RESULT' : result});
			}

			if(result.redirect != false)
			{
				window.location.href = result.redirect;
			}

			if(result.err != false)
			{
				prErrField(t_p, result.err);
			}
		}
	);
}
function prErrField(form, name)
{
	var el 	= form.find('[name="' + name + '"]'),
		lb 	= el.closest('label'),
		btn = form.find('.jqSend');

	lb.addClass('err animated shake');
	btn.addClass('err animated shake');

	el.on('keyup', function() {
		lb.removeClass('err animated shake');
		btn.removeClass('err animated shake');
	});
}
function prLoad(data)
{
	$.post(
		'include/load.php',
		data,
		function (data)
		{
			prModal(data);
		}
	);
}
function prLoadObject(e)
{
	e.preventDefault();
	prLoad($(this).data('data'));
}
function prMaskPhone() {
	$(this).mask("+7 (999) 999-99-99");
}

jQuery(document).ready(function($) {

	/* FancyBox */
	$(fbImages).addClass('fancybox').attr('rel', 'gallery');
	if($('.fancybox').length)
	{
		$('.fancybox').fancybox(fbSetting);
	}

	$(document).on('click', '.jqSend', prSend);
	$(document).on('click', '.jqLoad', prLoadObject);
	$('input[type="tel"]').each(prMaskPhone);

	$('.rowAccordeon .title, .rowAccordeon .arrow').click(function() {
		if($(this).closest('.item').hasClass('active'))
		{
			$(this).closest('.item').find('.content').slideUp();
		}
		else
		{
			$(this).closest('.item').find('.content').slideDown();
		}
		$(this).closest('.item').toggleClass('active');
	});

	function prScroll(e)
	{
		if($(window).scrollTop() > $('.rowSlider').height())
		{
			$('.rowTop').addClass('active');
		}
		else
		{
			$('.rowTop').removeClass('active');
		}
	}
	$(window).on('scroll load', function() {
		prScroll();
	});

	$('a[href*=#]').bind("click", function(e){
		var anchor = $(this).attr('href');
		if(anchor != '#')
		{
			$('html, body').stop().animate({
				scrollTop: $(anchor).offset().top - $('.rowTop').height()
			}, 1000);
			e.preventDefault();
		}
	});

});