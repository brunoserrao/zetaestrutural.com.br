<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts/fonts.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>	

	<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-65952400-1', 'auto');
		ga('send', 'pageview');
	</script>

	<meta property="og:locale" content="pt_BR"/>
	<meta property="og:type" content="blog"/>
	<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>"/>
	<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"/>
	<meta property="og:url" content="<?php echo site_url() ?>"/>
	<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>"/>
	<meta property="article:publisher" content="https://www.facebook.com/zeta.estrutural"/>
	<meta property="article:author" content="https://www.facebook.com/celso.facciojunior"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/zeta-facebook.jpg"/>
</head>

<body>
	<!-- CONTENT -->
	<div id="content">