<html>
	
	<head>
		<title>East Coast Assembly</title>
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/eca.js"></script>
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	</head>

	<body>

		<!-- container -->
		<div class="container page-container">
			
			<!-- header text (placeholder?) -->
			<div class="row">
                <div class="col-md-9">
                    <img class="header-img" src="<?php bloginfo('template_directory'); ?>/img/header-test.png" />
                </div>
                <div class="col-md-3 header-right">
                    <a href=""><i class="fa fa-2x fa-facebook-square"></i></a>
                    <a href=""><i class="fa fa-2x fa-google-plus-square"></i></a>
                    <a href=""><i class="fa fa-2x fa-instagram"></i></a>
                    <a href=""><i class="fa fa-2x fa-twitter-square"></i></a>
                </div>
			</div>

			<!-- navigation -->
			<nav class="navmenu">
				<ul>
					<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
				</ul>
			</nav>

			<!-- Image for each page -->
			<div class="row">
				<div class="col-md-12 page-splash">
					<?php if (is_page('Home')): ?>
						<img src="<?php bloginfo('template_directory'); ?>/banner/1.png">
					<?php endif; ?>
					<?php if (is_page('Quote')): ?>
						<img src="<?php bloginfo('template_directory'); ?>/banner/2.png">
					<?php endif; ?>
					<?php if (is_page('Gallery')): ?>
						<img src="<?php bloginfo('template_directory'); ?>/banner/3.png">
					<?php endif; ?>
					<?php if (is_page('Services')): ?>
						<img src="<?php bloginfo('template_directory'); ?>/banner/4.png">
					<?php endif; ?>
					<?php if (is_page('Contact Us')): ?>
						<img src="<?php bloginfo('template_directory'); ?>/banner/5.png">
					<?php endif; ?>
				</div>
			</div>
			<!-- -->