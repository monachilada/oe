<div id="page-<? the_ID() ?>" class="page container">
	<div class="row">
		<? if(get_field('image_position') == 'left'): ?>
			<div class="col span12">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('large', array('class' => 'feature')); ?>
				<?php endif; ?>
			</div>
		<? endif; ?>
		<div class="col span10 push2">
			<?php if(!get_field('hide_title')): ?>
				<h1><?php the_title(); ?></h1>
			<?php endif; ?>
			<?php if(get_the_content() != ''): ?>
				<div class="feature">
					<?php the_content(); ?>
				</div>
			<? endif; ?>
		</div>
		<? if(get_field('image_position') == 'right'): ?>
			<div class="col span12">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('large', array('class' => 'feature')); ?>
				<?php endif; ?>
			</div>
		<? endif; ?>
			
	</div>
</div>