<?php
function get_post_footer() {
	$p_y = get_the_time('Y');
	$p_m = get_the_time('m');
	$p_d = get_the_time('d');
	$p_date = $p_y.'/'.$p_m.'/'.$p_d;
	$p_link = get_permalink();

	$result = '<div class="post-footer"><a href="' . $p_link . '" title="'. $p_link . '">#</a> | ';

	$result .= '<a href="'. get_day_link($p_y, $p_m, $p_d) . '" title="' . $p_date . ' ' . get_the_time("h:i:s a") . '">' . $p_date .'</a> | ' . get_the_category_list(' &bull; ');
	if (!is_page() && comments_open()) {
		$c_num = get_comments_number();
		if ($c_num == 0) {
			$c = __('No Comments', 'nutcrackr');
		} elseif ($c_num > 1) {
			$c = sprintf(__('%d Comments', 'nutcrackr'), $c_num);
		} else {
			$c = __('1 Comment', 'nutcrackr');
		}
		$result .= ' | <span class="number-of-comments"><a href="' . $p_link . '#comments" title="' . __('comment', 'nutcrackr') . '">' . $c . '</a></span>';
	}
	$result .= '</div>';
	echo $result;
}

function tag_list() {
	echo get_the_tag_list('<div class="taglist">'.__('tags', 'nutcrackr').' | ', ', ', '</div>');
}


/* ADD WIDGETS IN THE FOOTER */
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'bucket left',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'bucket right',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));


add_action('after_setup_theme', 'nutcrackr_setup');
function nutcrackr_setup() {
	load_theme_textdomain('nutcrackr', get_template_directory() . '/languages');
}
