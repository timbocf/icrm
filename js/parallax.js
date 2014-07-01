(function($){
	$.fn.extend({
		parallax: function() {
			var $this = $(this);
			if ($this.length == 0) return; // FIX
			var $window = $(window);
			var bg = new Image;
			bg.src = $this.css('background-image').replace(/url\(|\)$/ig, '');

			$(window).scroll(function() {
				var bg_max_range = $this.outerHeight() - ($window.innerWidth() * bg.height / bg.width);
				var dist_top = $this.offset().top - $window.scrollTop();

				var bg_range = {
					top: 0,
					bottom: bg_max_range,
					getValue: function(percentage) {
						return percentage * this.bottom;
					}
				};

				var pos_range = {
					top: $this.outerHeight() * -1,
					bottom: $window.innerHeight(),
					getPercentage: function(value) {
						var percentage = (value - this.top) / (this.bottom - this.top);
						if (percentage < 0) return 0;
						if (percentage > 1) return 1;
						return percentage;
					}
				}

				$this.css('background-position', 'center ' + bg_range.getValue(
					pos_range.getPercentage(dist_top) / 1
				) + 'px');
			});
		}
	});
})(jQuery);