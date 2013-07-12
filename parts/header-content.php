<header>
	<div class="container">
		<div class="row">
			<h1 class="col span7">
				<?php $header_image = get_header_image(); if(!empty($header_image)): ?>
					<img src="<?php echo $header_image; ?>" alt="<?php _e(get_bloginfo('title')); ?> — <?php _e(get_bloginfo('description')); ?>" />
				<? endif; ?>
			</h1>
			<nav class="col span15 push2 sideways">
				<?php wp_nav_menu(array('menu' => 'main-menu', 'container' => false, 'menu_class' => 'float-right')); ?>
			</nav>
		</div>
	</div>
</header>