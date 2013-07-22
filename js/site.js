jQuery(document).ready(function($) {
	$('body.home a').each(function() {
		var $this = $(this),
		$base = $('body').data('baseurl'),
		$url = $this.attr('href').replace($base, '').replace(/\//gi, '');
		
		if($url != '#') {
			if($url == '') {
				$url = $('body > section:first').attr('id');
			}
			
			var $target = $('#'+$url);
			
			if($target.size() > 0) {
				$this.attr('href', '#'+$url);
			}
		}
	});
	
	$('body').on('click', 'nav.carousels-nav a', function($e) {
		$e.preventDefault();
		
		var $this = $(this),
		$carousel = $this.data('carousel'),
		$carousels = $this.parents('nav.carousels-nav').prev('.carousels');
		$carousels.height($carousels.height());
		
		$('.carousel:visible:not([data-carousel="'+$carousel+'"]):not(:animated)', $carousels).fadeOut('slow', function() {
			$('.carousel[data-carousel="'+$carousel+'"]', $carousels).fadeIn('slow', function() {
				$carousels.height('');
			});
		});
	});
});