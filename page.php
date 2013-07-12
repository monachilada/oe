<?php get_header(); ?>
	<section>
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<?php get_template_part('parts/loop', 'page'); ?>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>