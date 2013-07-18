<?php
/*
Template name: Carousel Page
*/
?>
<?php get_header(); ?>
	<?php get_template_part('parts/background'); ?>
	<section id="<?= $post->post_name ?>" class="<? the_field('color_scheme') ?>">
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<?php get_template_part('parts/loop', 'page-columns'); ?>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>