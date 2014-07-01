(function($){$(function(){

	var slideshow = $('.home-slideshow');

	var slideCount = $('.home-slideshow').children().length;



	slideshow.slick({

		arrows: false,

		fade: true,

		onBeforeChange: function() {

			var cur = slideshow.slickCurrentSlide();

			var curSlide = $(this.$slides[cur]);

			curSlide.find('.slide-video').animate({

				opacity: 0

			}, 50, 'swing', function() {

				curSlide.find('.slide-video').css('display', 'none');

			});

		},

		onAfterChange: function() {

			var cur = slideshow.slickCurrentSlide();

			var curSlide = $(this.$slides[cur]);

			curSlide.find('.slide-video').css('display', 'block').animate({

				opacity: 1

			}, 50);

			$('.slideshow-goto').removeClass('active');

			$('.slideshow-goto[data-target=' + cur + ']').addClass('active');

		}

	});



	$('.home-testimonial').slick({

		autoplay: true,

		autoplaySpeed: 6000,

		pauseOnHover: true,

		speed: 1000,
		
		arrows: true

	});



	var append = '<div class="container"><div class="slideshow-controls"><a href="#" class="slideshow-previous">Previous</a>';

	for (var i = 0; i < slideCount; i++)

	{

		append+= '<a href="#" class="slideshow-goto" data-target="' + i + '">' + (i + 1) + '</a>';

	}

	append+= '<a href="#" class="slideshow-next">Next</a></div></div>';



	slideshow.parent().parent().parent().parent().after(append);



	$('.slideshow-goto').first().addClass('active');



	$('.slideshow-goto').on('click', function(e) {

		e.preventDefault();

		slideshow.slickGoTo($(this).data('target'));

	});



	$('.slideshow-previous').on('click', function(e) {

		e.preventDefault();

		slideshow.slickPrev();

	})



	$('.slideshow-next').on('click', function(e) {

		e.preventDefault();

		slideshow.slickNext();

	});



	// $('.home-slideshow-wrap').parallax();

	

})})(jQuery)