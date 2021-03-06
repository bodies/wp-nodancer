<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
	<?php if (have_posts()) : ?>
		<p class="string"><?php _e('You searched for the following','nutcrackr'); ?>: "<strong><?php echo wp_specialchars($s); ?></strong>"</p>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post"  id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<span class="date"><?php the_time(__('m/j/Y','nutcrackr')) ?></span>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			<?php get_post_footer(); ?>
		</div>
		<?php endwhile; ?>
		<div class="pagination clearfix">
			<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','nutcrackr')) ?></div>
			<div class="next"><?php previous_posts_link(__('Newer posts','nutcrackr').' &raquo;') ?></div>
		</div>
	<?php else : ?>
		<p class="string"><?php _e('You searched for the following','nutcrackr') ?>: "<strong><?php echo wp_specialchars($s); ?></strong>"</p>
		<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','nutcrackr'); ?></a>
		<h2 class="error"><?php _e('We didn\'t find anything. Try a different search or look in the categories below.','nutcrackr'); ?></h2>
	<?php endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
