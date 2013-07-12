<div class="page container">
	<div class="row">
		<?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>	
	<?php $temp_post = $post; $subpages = get_posts(array('post_type' => 'page', 'post_parent' => get_the_ID(), 'orderby' => 'menu_order', 'order' => 'ASC')); ?>
	<?php if(count($subpages) > 0): ?>
		<div class="row">
			<?php foreach($subpages as $post): setup_postdata($post); ?>
				<? $template = str_replace('.php', '', get_post_meta(get_the_ID(), '_wp_page_template', true)); ?>
				<? if($template == 'default' || $template == 'page-columns') $template = 'page'; ?>
				<div class="col span<?= floor(24/count($subpages)) ?><? if(true): // Push columns if they don't ad up to 24 ?><? endif; ?>">
					<?php get_template_part('parts/loop', $template); ?>
				</div>
			<?php endforeach; $post = $temp_post; ?>
		</div>
	<?php endif; ?>
</div>