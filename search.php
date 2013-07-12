<?php get_header(); ?>
	<?php if ( have_posts() ): ?>
		<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>	
		<?php get_template_part('parts/loop'); ?>
	<?php else: ?>
		<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
	<?php endif; ?>
<?php get_footer(); ?>