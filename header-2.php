<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?><?php wp_title("|",true); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="author" content="Timothy Long">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="alternate" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather:400,700">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:300">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head() ?>
</head>
<body>
	<header class="header-single">
		<div class="header-inner">
			<div id="photo">
				<a href="<?php echo get_settings('home'); ?>">&nbsp;</a>
			</div>
			<div class="title">
				<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<ul>
					<?php wp_list_pages('title_li=&'); ?>
				</ul>
				<!--<p><?php bloginfo('description'); ?></p>-->
			</div>
		</div>
	</header>
