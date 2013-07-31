<?php if(has_post_thumbnail()): ?>
	<?php the_post_thumbnail('large', array('class' => 'feature')); ?>
<?php endif; ?>
<?php if(!get_field('hide_title')): ?>
	<h3 class="text-center"><?php the_title(); ?></h3>
<?php endif; ?>
<?php if(get_the_content() != ''): ?>
	<?php the_content(); ?>
<? endif; ?>