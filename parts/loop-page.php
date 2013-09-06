<div id="page-<? the_ID() ?>" class="page container">
	<div class="row">
		<div class="col span14 push5">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('large', array('class' => 'feature')); ?>
			<?php endif; ?>
			<?php if(!get_field('hide_title')): ?>
				<h2 class="text-center"><?php the_title(); ?></h2>
			<?php endif; ?>
			<?php if(get_the_content() != ''): ?>
				<div class="lede">
					<?php the_content(); ?>
				</div>
			<? endif; ?>
		</div>
	</div>
</div>