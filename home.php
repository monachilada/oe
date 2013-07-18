<?php get_header(); ?>
	<?php $post = get_post(get_option('page_for_posts')); setup_postdata($post); ?>
	<?php get_template_part('parts/background'); ?>
	<section id="<?= $post->post_name ?>" class="blog <? the_field('color_scheme') ?>">
		<div class="container">
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
			<div class="row">
				<div class="col span14 push2">
					<?php if(have_posts()): ?>
						
						<?php while(have_posts()): the_post(); ?>
							<?php get_template_part('parts/loop', 'post'); ?>
						<?php endwhile; ?>
					<?php else: ?>
						<div class="row">
							<div class="col span24">
								<h2 class="text-center"><?php _e('No posts to display'); ?></h2>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="col span5 push1 widgets">
					<? get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>