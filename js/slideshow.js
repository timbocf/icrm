(function($){
	$.fn.extend({
		fpSlideshow: function() {
			return this.each(function(){
				var $this = $(this);
				var slides = $this.children();
				$this.append('<div class="slideshow-track"></div>');
				var track = $this.children('.slideshow-track');

				/* INIT */
				$this.css('overflow', 'hidden');
				track.css('width', slides.outerWidth() * slides.length);
				slides.appendTo(track);
				slides.css({
					'position': 'relative',
					'width': $this.innerWidth(),
					'float': 'left'
				});

			});
		}
	});
})(jQuery)