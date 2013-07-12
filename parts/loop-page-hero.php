<div class="page container">
	<div class="row">
		<div class="col span12">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<div class="col span12">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>
		</div>		
	</div>
</div>