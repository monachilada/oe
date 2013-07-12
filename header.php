<!DOCTYPE HTML>
<html>
	<head>
		<title><?php _e(get_bloginfo('name')); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php get_template_part('parts/header', 'content'); ?>
