<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package PaddyWagon
 * @subpackage Elegant
 * @since Elegant 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/images/favicon.png"/>

    <!--Original Head Tag from Dora-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery-ui-1.10.1.custom.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css" type="text/css" media="screen"/>
	<link rel="stylesheet" id="camera-css"  href="<?php echo get_template_directory_uri();?>/css/flexslider.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/grid.css" type="text/css" media="screen"/>
    <link href="<?php echo get_template_directory_uri();?>/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri();?>/css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'/>


	<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-ui-1.10.1.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/slider/jquery.flexslider-min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.src.js"></script>
	<![endif]-->

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link href="<?php echo get_template_directory_uri();?>/css/slide/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slide/settings.css" media="screen" />
    <noscript>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/nojs.css" />
		</noscript>

    <?php wp_head(); ?>
