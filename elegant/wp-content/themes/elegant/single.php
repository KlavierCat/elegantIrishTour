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
            <div id="nav-back" class="fright">
                <a href="<?php bloginfo('url');?>"><i class="icon-reply"></i></a>
            </div>

        </div>

    </div>
    <div class="container clearfix" style="margin-top: 90px;">
      <div class="grid_12">
        <?php if (have_posts()):?>
        <?php while (have_posts()): the_post();?>
        <h4 id="mobile-shorten"><?php the_title(); ?></h4>

<!--left-->
        <div class="left grid_4" id="widget-left">
        <!--left-pic-->
            <div class="grid_12" id="mobile-hide">
              <div class="cycle-slideshow featured-image" data-cycle-fx="scrollHorz" data-cycle-timeout="2000">
                <div class="cycle-pager"></div>
                <div class="cycle-caption"></div>
                  <img src="<?php
                    if (class_exists('Dynamic_Featured_Image')){
                        global $dynamic_featured_image;
                        $featured_images = $dynamic_featured_image->get_featured_images();
                        echo $featured_images[0]['full'];
                    }
                    ?>" alt=""/>
              </div>
            </div>
    <!--end of left pic-->

    <!--left-widget-->
        <?php $tour_id = get_post_meta(get_the_ID(), 'tour_id', true); ?>
        <?php if($tour_id) { ?>
            <div class="grid_12" id="eduardo_booking_widget">
	    	  <script type="text/javascript">url = parent.document.URL; document.write('<iframe frameBorder="0" width="320" height="650" src="http://paddywagontours.com/admin/widget/tour_chosen?url=' + url + '&tour_id=<?php echo  $tour_id; ?>"></iframe>');</script>        
	       </div>
<?php } ?>

    <!--end of left-widget-->
        </div><!--left, grid_4-->
<!--end of left-->

<!--right-->
        <div class="right grid_7" id="widget-right">
    <!--right included-->
                <div class="grid_12" style="margin-right: 0;">

                  <!--beginning of inclusion metabox-->
                  <?php
                    $custom_fields = get_post_custom(get_the_ID());
                    $inclusion = $custom_fields['included'];
                    if (!empty($inclusion)){
                      echo "<ul class='tour-meta'>";
                      echo "<li><h3><strong>Price</strong></h3></li>";
                      echo "</ul>";
                      echo "<div>";
                      echo "<ul class='tour-meta'>";
                      foreach($inclusion as $key => $value){
                        echo "<li><i class='icon-map-marker'></i>" . $value . "</li>";
                      }
                      echo "</ul>";
                      echo "</div>";
                    }
                  ?>
                  <!--end of inclusion metabox-->
                    
                  <!--beginning of menu metabox-->
                    <?php $menu_url = get_post_meta(get_the_ID(), 'menu', true); ?>
                    <?php if($menu_url) { ?>
                        <ul class="tour-meta">
                            <li><h3><strong>Menu</strong></h3></li>
                        </ul>
                        <div>
                            <ul class="tour-meta">
                                <li><i class='icon-map-marker'></i><a target="_blank" href="<?php echo $menu_url; ?>">View details</a></li>
                            </ul>
                        </div>
                    <?php } ?>
                  <!--end of menu metabox-->
                </div>
    <!--end of included-->

    <!-- right itinerary-->
                <div class="grid_12">
                  <!--<h3><strong>Itinerary</strong></h3>-->
                  <?php the_content(); ?>
                  <!--<input type="submit" class="contact_btn send_btn" value="Book Now" />-->
<?php if(!$tour_id) { ?>
                  <input type="reset" class="contact_btn" value="Ask a Question" onclick="window.location='<?php bloginfo('url');?>#contactForm'" />
<?php } ?>
                </div><!--tour-content-->
    <!--end of right itinerary-->
        </div><!--right, grid_8-->

    </div><!--grid 12-->
<!--end of actual content-->

        <div class="clear"></div>
        <div style="height:100px;">&nbsp;</div>

        <?php endwhile; ?>
        <?php endif; ?>
     </div><!--container clear fix-->

<!--WP: Footer-->
    <div id="footer">
      <div class="container clearfix">
        <?php get_footer(); ?>