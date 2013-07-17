<div id="page-<? the_ID() ?>" class="page container">
	<div class="row">
		<div class="col span12 push6 text-center">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>
			<?php if(!get_field('hide_title')): ?>
				<h2><?php the_title(); ?></h2>
			<?php endif; ?>
			<?php if(get_the_content() != ''): ?>
				<div class="lede">
					<?php the_content(); ?>
				</div>
			<? endif; ?>
		</div>
	</div>
</div>