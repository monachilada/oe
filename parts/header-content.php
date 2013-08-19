<header>
	<div class="container">
		<div class="row">
			<h1 class="col span4">
				<a href="<?= home_url(); ?>">
					<?php $header_image = get_header_image(); if(!empty($header_image)): ?>
						<img src="<?php echo $header_image; ?>" alt="<?php _e(get_bloginfo('title')); ?> — <?php _e(get_bloginfo('description')); ?>" />
					<? else: ?>
						<?php _e(get_bloginfo('title')); ?>
					<? endif; ?>
				</a>
			</h1>
			<nav class="col span18 push2 sideways">
				<?php wp_nav_menu(array('menu' => 'main-menu', 'container' => false, 'menu_class' => 'float-right')); ?>
			</nav>
		</div>
	</div>
</header>