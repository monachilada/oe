<article class="post container">
	<?php if(has_post_thumbnail()): ?>
		<?php the_post_thumbnail('large'); ?>
	<?php endif; ?>
	<h3><?php the_title(); ?></h3>
	<h4><time datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></h4>
	<?php the_content(); ?>		
	<?php comments_template( '', true ); ?>
</article>