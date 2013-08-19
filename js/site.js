jQuery(document).ready(function($) {
	$('body header:first nav a').each(function() {
		var $this = $(this),
		$base = $('body').data('baseurl'),
		$home = $('body').data('homeurl'),
		$url = $this.attr('href').replace($base, $home+'#');
				
		if($url !== '' && $url !== '#' && $url.indexOf('#') >= 0) {
			$url = $url.replace(/\/$/, "");
			$this.attr('href', $url);
		}
	}).on('click', function() {
		var $this = $(this);
		
		$('li', $this.parents('nav')).removeClass('current-menu-item');
		$this.parents('li').addClass('current-menu-item');
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