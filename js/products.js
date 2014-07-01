(function($){ $(function() {

	function equalize()

	{

		if ($(window).width() >= 751)

		{

			$('.product-tabs > a').css('line-height', 'auto');

			$('.product-tabs > a').css('line-height', $('.product-info-wrap').outerHeight() / 3 + 'px');
			
			

			$('.product-info-panel').css('height', 'auto');

			$('.product-info-panel').css('height', $('.product-info-wrap').outerHeight());
			
			$('.product-info-headings > a').css('line-height', $('.product-info-wrap').outerHeight() / 4 + 'px');
			
		}

		else

		{

			$('.tab-pane').css('height', 'auto');
			
			$('.product-tab-content').css('text-align', 'left');
			
			// $('.product-tabs').css('border-bottom', '3px solid #989898');
			
			

			$('.product-info-panel').css('height', 'auto');

			$('.product-info-headings > a').css('line-height', '');
			
		}

	}



	equalize();



	$(window).on('resize', function() {

		equalize();

	});



	$('.tabs').fpTabs();



	$('.demo-wrap').parallax();



	$('.product-slide-show').slick({

		arrows: true,

		dots: true,

		autoplay: true,

		autoplaySpeed: 6000,

		pauseOnHover: true,

		speed: 1000

	});


})})(jQuery);