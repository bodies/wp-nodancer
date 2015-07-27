<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
			<?php if (have_posts()) : ?>
			 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
			<p class="string"><?php _e('Category Archives: ','nutcrackr'); echo wp_specialchars(single_cat_title()); ?></p>
	<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
			<p class="string"><?php _e('Tag Archives: ','nutcrackr'); echo wp_specialchars(single_tag_title()); ?></p>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<p class="string"><?php _e('Daily Archives: ','nutcrackr'); the_time('Y/m/d'); ?></p>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p class="string"><?php _e('Monthly Archives: ','nutcrackr'); the_time('Y/m'); ?></p>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p class="string"><?php _e('Monthly Archives: ','nutcrackr'); the_time('Y'); ?></p>
		  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		  <p class="string"><?php _e('Author Archives: ','nutcrackr'); the_author(); ?></p> 
	      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p class="string"><?php _e('Blog Archives','nutcrackr'); ?></p>
			<?php } ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post"  id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content(__('Read the rest of this post','nutcrackr').' &raquo;'); ?>
				</div>
				<?php get_post_footer(); ?>
			</div>
			<?php endwhile; ?>
			<div class="pagination clearfix">
				<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','nutcrackr')) ?></div>
				<div class="next"><?php previous_posts_link(__('Newer posts','nutcrackr').' &raquo;') ?></div>
			</div>
		<?php else : ?>
			<h2>Not found</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		<?php endif; ?>
		</div>
	<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
