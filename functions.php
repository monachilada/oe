<?php
	/* Turn on a few nice features */
	if(function_exists('add_theme_support')) {
		add_theme_support('custom-header', array('admin-preview-callback' => 'oe_header_preview'));
		add_theme_support('post-thumbnails');
	}
	
	function oe_header_preview() {
		$header_image = get_header_image();
		if (!empty($header_image)): ?>
			<img src="<?php echo $header_image; ?>" alt="" />
		<? endif;
	}
	
	/* Add a navigation menu */
	add_action('init', 'oe_menu');
	function oe_menu() {
		register_nav_menus(
			array('main-menu' => __('Header Menu'))
		);
	}	
	
	/* Insert scripts and styles in header of the page */
	add_action('wp_enqueue_scripts', 'oe_script_enqueuer');
	function oe_script_enqueuer() {
		/*wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );*/

		wp_register_style('all', get_template_directory_uri().'/style.css', '', '', 'all');
        wp_enqueue_style('all');
	}	
	
	/* Handle comment callback and delegate to a theme file */
	function oe_comment( $comment, $args, $depth ) {
		//$GLOBALS['comment'] = $comment; //What is this for? ?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
			<?php echo get_template_part('parts/comment', 'start'); ?>
		<?php endif;
	}
	
	function oe_end_comment( $comment, $args, $depth ) {
		echo get_template_part('parts/comment', 'end');
	}
	
	/* Used for dumping variables. Can and should be removed in production. */
	function debug() {
		$args = func_get_args();
		foreach($args as $arg): ?>
			<pre>
				<?php var_export($arg); ?>
			</pre>
		<?php endforeach;
	}