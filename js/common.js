(function($){$(function(){

	$('a.lightbox.video').on('click', function(e){

		e.preventDefault();



		$(this).colorbox({

			iframe: true,

			href: $(this).attr('href'),

			maxWidth: '100%',

			width: 960,

			height: 540

		});

	});



	$('.video-iframe').each(function(){

		var $this = $(this);



		$this.css('height', $this.outerWidth() * 0.5625 + 'px');

	});



	$(window).on('resize', function(){

		$('.video-iframe').each(function(){

			var $this = $(this);



			$this.css('height', $this.outerWidth() * 0.5625 + 'px');

		});

	});

})})(jQuery);