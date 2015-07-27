<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','nutcrackr'));
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','nutcrackr'); ?></p>
			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
	<div id="comments">
		<h3><?php comments_number(__('No comments yet.','nutcrackr'), __('There is 1 comment in this article:','nutcrackr'), __('There are % comments in this article:','nutcrackr') );?></h3>
		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'		=> 'ol',
				
			));
			?>
		</ol>
	</div><!-- close:comments -->
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<div id="comments">
		<h3><?php _e('No comments yet.','nutcrackr'); ?></h3>
	</div><!-- close:comments -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<div id="comments">
		<h3><?php _e('Comments are closed.','nutcrackr'); ?></h3>
	</div><!-- close:comments -->
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
	<?php comment_form(); ?>
<?php endif; // if you delete this the sky will fall on your head ?>
