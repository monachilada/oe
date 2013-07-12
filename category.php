<?php get_header(); ?>
	<?php if ( have_posts() ): ?>
		<h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>
		<?php get_template_part('parts/loop'); ?>
	<?php else: ?>
		<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
	<?php endif; ?>
<?php get_footer(); ?>