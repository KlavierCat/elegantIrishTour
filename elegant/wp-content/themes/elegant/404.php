<?php
/**
 * The Template for displaying error 404
 *
 * @package PaddyWagon
 * @subpackage Elegant
 * @since Elegant 1.0
 */
get_header(); ?>

    <link href="<?php echo get_template_directory_uri();?>/css/style_details.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="menu-top slidePoint">
        <div class="container clearfix">
            <div id="logo" class="fleft">
                <a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""/></a>
            </div>
        <a id="topBar" name="topBar"></a>
            <div id="nav" class="fright">
                <a href="<?php bloginfo('url');?>"><i class="icon-reply"></i></a>
            </div>

        </div>

    </div>
        <div class="container clearfix" style="margin-top: 90px;">
            <div class="grid_12" style="margin-bottom: 0">
                <p>Sorry! The thing you are looking for seems no longer to be here! A naughty leprechaun must have taken it away!</p>
            </div>
            <div class="clear"></div>
             <div style="height:230px;">&nbsp;</div>

        </div>

<!--WP: Footer-->
    <div id="footer">
        <?php get_footer(); ?>
