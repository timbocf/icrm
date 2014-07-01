(function($){$(function(){
	$.fn.extend({
		fpTabs: function() {
			return $(this).each(function() {
				var $list = $(this);

				$list.children().each(function() {
					var $item = $(this).children('a');
					var $tabContent = $($item.data('tab'));

					$item.on('hover', function() {
						$tabContent.siblings().removeClass('active');
						$tabContent.addClass('active');
					});
				});

			});
		}
	});
})})(jQuery);