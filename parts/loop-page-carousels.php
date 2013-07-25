<div id="page-<? the_ID() ?>" class="page container">
	<?php if(has_post_thumbnail() || !get_field('hide_title') || get_the_content() !== ''): ?>
		<div class="row">
			<div class="col span12 push6">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('large'); ?>
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
	<?php $temp_post = $post; $subpages = get_pages(array('parent' => get_the_ID(), 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC')); ?>
	<?php if(count($subpages) > 0): ?>
		<div class="row carousels">
			<?php $carousels = 0; foreach($subpages as $post): setup_postdata($post); ?>
				<div class="carousel col span14 push5 first-child" data-carousel="<?= $carousels ?>">
					<?php get_template_part('parts/loop', 'carousel'); ?>
				</div>
			<?php $carousels++; endforeach; $post = $temp_post; ?>
		</div>
		<nav class="row carousels-nav">
			<ul class="col span14 push5">
				<? for($c = 0; $c < $carousels; $c++): ?>
					<li><a href="#" data-carousel="<?= $c ?>"><?= $c ?></a></li>
				<? endfor; ?>
			</ul>
		</nav>
	<?php endif; ?>
</div>