<?php if(has_post_thumbnail()): ?>
	<?php the_post_thumbnail('large'); ?>
<?php endif; ?>
<?php if(!get_field('hide_title')): ?>
	<h3><?php the_title(); ?></h3>
<?php endif; ?>
<?php the_content(); ?>