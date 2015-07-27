<?php load_theme_textdomain('nutcrackr'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php if (is_home()) { bloginfo('name'); } elseif (is_single() || is_page() || is_archive()) { wp_title(''); ?> | <?php bloginfo('name'); } elseif  (is_404()) { _e('The page you are looking for doesn\'t exist. Sorry.','nutcrackr'); ?> - <?php bloginfo('name'); ?><?php } elseif (is_search()) { ?><?php _e('You searched for the following','nutcrackr'); ?>: "<?php echo wp_specialchars($s); ?>" | <?php bloginfo('name'); } ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" media="screen" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" media="print" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?> <?php _e('RSS Feed','nutcrackr'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php bloginfo('name'); ?> <?php _e('Comments RSS Feed','nutcrackr'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="header_title">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<p class="description"><?php bloginfo('description'); ?></p>
		</div>
		<div id="header_menu">
		<a href="<?php bloginfo('url'); ?>/about/" title="about" id="about_btn">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about.png" alt="about" onmouseover="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/about_hover.png'" onmouseout="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/about.png'" />
		</a>
		<a href="<?php bloginfo('url'); ?>/archives/" title="archive" id="arch_btn">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/archive.png" alt="archive" onmouseover="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/archive_hover.png'" onmouseout="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/archive.png'" />
		</a>
		<a href="<?php bloginfo('rss2_url'); ?>" title="rss" id="rss_btn">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/rss.png" alt="rss" onmouseover="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/rss_hover.png'" onmouseout="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/rss.png'" />
		</a>
		<a href="<?php bloginfo('url'); ?>/search/" title="search" id="search_btn">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/search.png" alt="search" onmouseover="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/search_hover.png'" onmouseout="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/search.png'" />
		</a>
		</div>
		<div style="clear:both"></div>
	</div><!-- close:header -->
