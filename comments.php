<div id="comments" class="row">
	<?php if(post_password_required()): ?>
		<p><? _e('This post is password protected. Enter the password to view any comments.') ?></p>
		</div>
		<?php return; ?>
	<? endif; ?>
	<?php if(have_comments()): ?>
		<h3 class="text-center"><?php comments_number(); ?></h3>
		<ol>
			<?php wp_list_comments(array('callback' => 'oe_comment', 'end-callback' => 'oe_end_comment')); ?>
		</ol>
	<?php elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')): ?>
		<p><? _e('Comments are closed') ?></p>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>
