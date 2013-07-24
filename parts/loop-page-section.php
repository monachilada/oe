<?php while(have_posts()): the_post(); ?>
	<?php get_template_part('parts/loop', 'page'); ?>
<?php endwhile; ?>