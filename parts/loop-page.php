<div class="page container">
	<?php if(has_post_thumbnail()): ?>
		<?php the_post_thumbnail('large'); ?>
	<?php endif; ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>