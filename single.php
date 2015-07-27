<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div class="entry">
					<?php the_content(__('Read the rest of this post','nutcrackr').' &raquo;'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','nutcrackr').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<?php tag_list(); ?>
				<?php get_post_footer(); ?>
			</div>
			<div class="pagination clearfix">
				<div class="prev"><?php previous_post_link('%link', '← %title'); ?></div>
				<div class="next"><?php next_post_link('%link', '%title →'); ?></div>
			</div>	
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<p class="string"><?php _e('Sorry, there are no posts about that.','nutcrackr'); ?></p>
	<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
