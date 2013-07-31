<div id="page-<? the_ID() ?>" class="page container">
	<?php if(has_post_thumbnail() || !get_field('hide_title') || get_the_content() !== ''): ?>
		<div class="row">
			<div class="col span12 push6">
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
	<?php endif; ?>
	<?php $temp_post = $post; $subpages = get_pages(array('parent' => get_the_ID(), 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC', 'meta_key' => '_wp_page_template', 'meta_value' => get_template_file('column'))); ?>
	<?php if(count($subpages) > 0): ?>
		<div class="row">
			<?php $max_columns = 24; $columns = 0; foreach($subpages as $post): setup_postdata($post); ?>
				<? $columns += get_field('column_width') + get_field('column_push'); if($columns > $max_columns): ?>
		</div>
		<div class="row">
				<? $columns = get_field('column_width') + get_field('column_push'); endif; ?>
				<div class="col span<? the_field('column_width') ?><? if(get_field('column_push')): ?> push<? the_field('column_push') ?><? endif; ?>">
					<?php get_template_part('parts/loop', 'column'); ?>
				</div>
			<?php endforeach; $post = $temp_post; ?>
		</div>
	<?php endif; ?>
</div>