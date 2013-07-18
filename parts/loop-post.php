<article class="post row">
	<h5 class="col span4 meta"><time datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_time('M'); ?><span><?php the_time('d'); ?></span><?php the_time('Y'); ?></time><?php comments_popup_link('Leave a Comment', '<span>1</span> Comment', '<span>%</span> Comments'); ?></h5>
	<div class="col span20">		
		<?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
		<h2><?php the_title(); ?></h2>		
		<?php the_content(); ?>		
		<?php comments_template( '', true ); ?>
	</div>
</article>