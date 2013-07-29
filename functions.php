<?php
	include_once('inc/acf-fields.php');
	
	/* Turn on a few nice features */
	if(function_exists('add_theme_support')) {
		add_theme_support('custom-header', array('admin-preview-callback' => 'oe_header_preview'));
		add_theme_support('post-thumbnails');
		add_theme_support('custom-background');
	}	
	
	register_sidebar(array(
		'name' => __( 'Sidebar' ),
		'id' => 'sidebar-sb',
		'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'name' => __( 'Footer' ),
		'id' => 'footer-sb',
		'description' => __( 'Widgets in this area will be shown in the footer side.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
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
		wp_register_script('oe', get_template_directory_uri().'/js/site-ck.js', array('jquery'));
		wp_enqueue_script('oe');

		wp_register_style('oe', get_template_directory_uri().'/style.css', '', '', 'all');
        wp_enqueue_style('oe');
	}	
	
	/* Handle comment callback and delegate to a theme file */
	function oe_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; //What is this for? ?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
			<?php echo get_template_part('parts/comment', 'start'); ?>
		<?php endif;
	}
	
	function oe_end_comment( $comment, $args, $depth ) {
		echo get_template_part('parts/comment', 'end');
	}
	
	function get_post_name($id) {
		$name = get_post($id);
		return $name->post_name;
	}
	
	function get_template_name($id) {
		return str_replace('.php', '', get_post_meta($id, '_wp_page_template', true));
	}
	
	function get_template_file($name) {
		return 'page-'.$name.'.php';
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