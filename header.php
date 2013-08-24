<!DOCTYPE html>
<!-- Conditional class for older versions of IE -->
<!--[if lt IE 9 & !IEMobile]><html class="ie" lang="en"><![endif]-->
<!--[if gt IE 8 | IEMobile]><!--><html lang="en"><!--<![endif]-->

<!--======================================================================
    Header.php
    Template for header content.
    You might also include site navigation in this file.
  --====================================================================== -->

    <head>
        <!-- Meta Info -->
	    <meta charset="<?php bloginfo('charset'); ?>">

	    <!-- Force latest available IE rendering engine and Chrome Frame (if installed) -->
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- Smart Titles -->
	    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

	    <!-- Add a description on the homepage -->
	    <?php if (is_home ()) : ?><meta name="description" content="<?php bloginfo('description'); ?>"><?php endif; ?>
	
	    <!-- Mobile Screen Resizing -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Favicon -->
	    <link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">

	    <!-- Apple Touch Icons -->
	    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-114.png">
	    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-144.png">

        <!-- MS Homescreen Icons -->
        <meta name="msapplication-TileColor" content="#0088cc">
        <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/img/ms-touch-icon.png">

	    <!-- Feeds & Pings -->
	    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
	    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	    <!-- Stylesheet -->
	    <!-- If you minify your stylesheet, you can keep it in a separate file and simply change the filename below. -->
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

        <!-- HTML5 Shim for IE 6-8 -->
	    <!--[if lt IE 9]>    
		    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	
	    <?php wp_head(); ?>

    </head>

    <body>

	    <!-- Old Browser Warning -->
	    <!-- If you're supporting IE 6-7, remove this -->
        <!--[if lt IE 8]>
            Did you know that your web browser is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, better, and safer web experience.
        <![endif]-->


	    <section>
