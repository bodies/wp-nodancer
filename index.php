<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php if ( !is_page() ) { ?>
					<?php } ?>
					<!--
					<div class="clearfix"></div>
					-->
					<div class="entry">
						<?php the_content(__('Continue Reading','nutcrackr').' &raquo;'); ?>
					</div>
					<?php get_post_footer(); ?> <!-- my function -->
				</div><!-- close:post -->
			<?php endwhile; ?>
			<div class="pagination clearfix">
				<div class="prev"><?php next_posts_link('← '.__('Previous posts','nutcrackr')) ?></div>
				<div class="next"><?php previous_posts_link(__('Newer posts','nutcrackr').' →') ?></div>
			</div>
		<?php else : ?>
			<p class="string"><?php _e('You broke the interwebs... wow... way to go.. no really you may want to call someone to take a look at it..','nutcrackr'); ?></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','nutcrackr'); ?></a>
		<?php endif; ?>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>
