<article class="post row">
	<h5 class="col span4 meta"><time datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_time('M'); ?><span><?php the_time('d'); ?></span><?php the_time('Y'); ?></time><?php comments_popup_link('<span>Leave</span> a comment', '<span>1</span> Comment', '<span>%</span> Comments'); ?></h5>
	<div class="col span20">		
		<?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
		<h2><a href="<? the_permalink() ?>"><?php the_title(); ?></a></h2>
		<h6><span class="spacer">Author: <? the_author_posts_link() ?></span> <span class="spacer">Category: <? the_category(', ') ?></span> <span class="spacer"><? the_tags() ?></span></h6>
		<div class="spacer-top">
			<?php the_content('Read more'); ?>
		</div>
		<?php comments_template( '', true ); ?>
	</div>
</article>