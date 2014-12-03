<?php
/**
 * The Template for displaying all single posts
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
            <div id="nav" class="fright">
                <a href="<?php bloginfo('url');?>"><i class="icon-reply"></i></a>
            </div>

        </div>

    </div>
        <div class="container clearfix" style="margin-top: 90px;">
            <div class="grid_12" style="margin-bottom: 0">
                <?php if (have_posts()):?>
                <?php while (have_posts()): the_post();?>
                <div class="grid_6">
                 <div class="cycle-slideshow featured-image" data-cycle-fx="scrollHorz" data-cycle-timeout="2000">
                    <div class="cycle-pager"></div>
                    <div class="cycle-caption"></div>
                     <!--Need to find a way to insert image here-->
                    <img src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>" alt=""/>
                   </div>
                </div>

                <div class="grid_6" style="margin-right: 0;">

                  <ul class="tour-meta">
                        <li><i class="icon-map-marker"></i><strong><?php the_title(); ?></strong></li>

                    </ul>
                 <p><?php the_content(); ?></p>
                 <!--<input type="submit" class="contact_btn send_btn" value="Book Now" />-->
                        <input type="reset" class="contact_btn" value="Ask a Question" onclick="window.location='<?php bloginfo('url');?>#contactForm'" />

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="clear"></div>
             <div style="height:230px;">&nbsp;</div>

        </div>

<!--WP: Footer-->
    <div id="footer">
      <div class="container clearfix">
        <?php get_footer(); ?>
