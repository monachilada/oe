<?php
/*
Template name: Columns Page
*/
?>
<?php get_header(); ?>
	<section>
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<?php get_template_part('parts/loop', 'page-columns'); ?>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>