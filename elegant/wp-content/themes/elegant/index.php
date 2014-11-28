</head>

<?php get_header(); ?>

<body>

<!--WP: header-->    
    
    <div class="menu-top">	
        <div class="container clearfix">

            <div id="logo" class="fleft">
                <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""/></a>
            </div>
		
          <a id="topBar" name="topBar"></a>
            <div id="nav" class="fright">
                <ul class="navigation">
                    <li data-slide="2">Home</li>
                    <li data-slide="4">Tours</li>
                    <li data-slide="6">Gallery</li>
                    <li data-slide="10">Contact</li>
                
                </ul>
                <div class="clear"></div>
            </div>
	   
        </div>
       
    </div>
<!--WP: end of header--> 

<!--WP: Widget: scrolling image-->    
<div style="margin-top:-55px !important"></div>>

<div class="slidePoint" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
    
	<div class="effect_2 padding_slide2">
		<div class="container clearfix">
			
		<div class="grid_12">
			<h1 style="margin: 0 0 40px 0;">About</h1>
			<div class="abt"><h2 style="color:#000000; line-height:34px !important;">Elegant Irish Tours is a highly professional provider of luxury limousine tours, from 1 day tours to multiple day tours that will give you an insight to the beauty of Ireland. If you are seeking a transfer during your stay in Ireland, we provide shuttles and limousines from all parts of the country to any destinations you require. We take pride in offering  customized luxury tours of Ireland based on your wishes and preferences. We are NOT a party service offering stretch limousines for stag nights, hen nights, birthday parties, etc. Our main goal is to provide you with the best service available, cater to your every need and give you a once in a lifetime luxury experience in Ireland. Rely on us to make all of your wishes come true during your stay in Ireland!</h2></div>
		</div>
		    
		</div>
	</div>
</div>

<!--WP: End of Widget: Scrolling image-->  

<div class="slidePoint" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
        
        <img class="icon_img" src="images/icon2.jpg" alt=""/>
		<h4>Our Fleet</h4>
	    <div class="grid_12 history">

            <!--WP: Categories 1 - Fleet-->
            
            <div><!--Categories: Fleet-->
                <?php $counter =1; ?>
                <?php $loop = new WP_Query( array('post_type'=>'fleet', 'posts_per_page'=>6)); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $counter = $counter+1; ?>
                <div id="offers<?php echo $counter; ?>" class="grid_4 serv_block">
                    <!--have to find a way to put the first 2 images-->
                    <img class="images_travel1" src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>" alt=""/>
                    <img class="images_travel2" src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[1]['full'];
                              }
                              ?>" alt=""/>
                    <img class="images_transparent" src="images/travel_transparent.png" alt=""/>
                    <p><?php the_title(); ?></p>
                    <div class="excerpt-holder"><?php the_excerpt(); ?></div>
                    <div class="serv_link1"><a href="<?php the_permalink(); ?>">More</a></div>
                </div><!--end post-->
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
            </div><!--Categories: Fleet-->
        </div><!--grid_12 history-->

<!--WP: Content/similar to a widget: Map-->  
    <div id="mobile-hide">
        <div class="clear"></div>
      
	    <img class="icon_img" src="images/icon3.jpg" alt=""/>
	    <h4>What To See</h4>
	    <div class="clear"></div>
        
		<div class="relative">
			<div class="coordMap">
				<img src="images/world_map.jpg" class="imgMap" alt=""/>
				<div class="marker" id="france" data-coords="960, 390">
				    <h3>Giant’s Causeway</h3>
				    <img src="images/team1.jpg" alt=""/>
                    <h3>Belfast city</h3>
				
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
				<div class="marker" id="russia" data-coords="1240, 260"> <!-- 1240, 260 -->
				    <h3>Cliffs of Moher</h3>
				    <img src="images/team2.jpg" alt=""/>
                    <h3>Belfast city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div> 
				<div class="marker" id="poland" data-coords="1045, 345">
				    <h3>Blarney Castle</h3>
				    <img src="images/team3.jpg" alt=""/>
                    <h3>Belfast city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>  
				<div class="marker" id="argentina" data-coords="785, 945">
				    <h3>Titanic Belfast</h3>
				    <img src="images/team4.jpg" alt=""/>
                    <h3>Belfast City</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
				<div class="marker" id="australia2" data-coords="1110, 590">
				    <h3>Kilkenny Castle</h3>
				    <img src="images/team5.jpg" alt=""/>
                    <h3>Cork city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
				<div class="marker" id="egypt" data-coords="1100, 510">
				    <h3>Waterford Crystal</h3>
				    <img src="images/team6.jpg" alt=""/>
                    <h3>Cork city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
				<div class="marker" id="usa" data-coords="1300, 420">
				    <h3>killarney national park</h3>
				    <img src="images/team7.jpg" alt=""/>
                    <h3>Cork city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
				<div class="marker" id="japan" data-coords="1140, 530">
				    <h3>Ashford Castle</h3>
				    <img src="images/team8.jpg" alt=""/>
                    <h3>Cork city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
                <div class="marker" id="japan" data-coords="1120, 410">
				    <h3>Kylemore Abbey</h3>
				    <img src="images/team9.jpg" alt=""/>
                    <h3>Cork city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
                <div class="marker" id="japan" data-coords="1020, 410">
				    <h3>Newgrange</h3>
				    <img src="images/team10.jpg" alt=""/>
                    <h3>Cork city</h3>
					<ul class="team_soc">
				        <li><a href="javascript:void(0);" class="soc1"></a></li>
				        <li><a href="javascript:void(0);" class="soc2"></a></li>
				        <li><a href="javascript:void(0);" class="soc3"></a></li>
				        <li><a href="javascript:void(0);" class="soc4"></a></li>
			        </ul>
				</div>
			</div>
			<div class="controls">
				<a href="#" title="france">Giant’s Causeway</a>
				<a href="#" title="russia">Cliffs of Moher</a>
				<a href="#" title="poland">Blarney Castle</a>
				<a href="#" title="argentina">Titanic Belfast</a>
				<a href="#" title="australia2">Kilkenny Castle</a>
				<a href="#" title="egypt">Waterford Crystal</a>
				<a href="#" title="usa">killarney national park</a>
				<a href="#" title="japan">Ashford Castle</a>
                <a href="#" title="japan">Kylemore Abbey</a>
                <a href="#" title="japan">Newgrange</a>
			</div>
		</div>

		<div class="clear"></div>
<!--WP: End of Content/similar to a widget: Map-->	
	</div><!--end of mobile-hide-->
    </div>
</div>

<!--WP: Category 2: tours, which include 3 sub-categories -->
<a id="day-tours"></a>
<div class="slidePoint" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<div class="effect_2 padding_slide4">
	    <div class="container clearfix">
	        <div class="grid_12">
	            <h1>Tours</h1>
	           			
	        </div>
            
	    </div>
  
	</div>
</div>

<div class="slidePoint" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
    <div id="container" class="container transitions-enabled infinite-scroll">

        <div  class="grid_12" style="margin-bottom: 0;"><!--Category: tours-->
	          <ul id="city_folio">
	              <li id="africa_folio" class="active">Day Tours</li>
	              <li id="europe_folio">Multiple Day Tours</li>
                  <li id="america_folio">Speciality Tours</li>
	          </ul>

            <div><!--Categories: Day Tours-->    
                <?php $loop = new WP_Query( array('post_type'=>'day_tours', 'posts_per_page'=>6)); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="africa box col4 hover-item">
	               <div class="view view-first">
                       <!--have to find a way to insert this img, TWICE!-->
                        <img class="imgTop" alt="Ipsum" src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>"/>
	                    <div class="abs">
                            <a class="fancybox zoom info" href="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>"></a>
                            <a class="link info" href="<?php the_permalink(); ?>"></a>
                        </div>	
	                </div>              
	              <div class="layer_txt">
	                  <h3><a title="<?php the_title(); ?>" rel=""><?php the_title(); ?></a></h3>
                      <div class="clear"></div>
	                  <p class="content_txt"><?php the_excerpt(); ?> </p>
	                  <div class="content_price"><a class="price_folio" href="<?php the_permalink(); ?>">More Info</a></div>
	              </div>
	            </div><!--end post-->
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
            </div><!--Categories: Day Tours-->
                      
            <div><!--Categories: Multiple Day Tours-->    
                <?php $loop = new WP_Query( array('post_type'=>'multiple_day_tours', 'posts_per_page'=>6)); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="europe box col4 hover-item">
	               <div class="view view-first">
                       <!--have to find a way to insert this img, TWICE!-->
                        <img class="imgTop" alt="Ipsum" src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>"/>
	                    <div class="abs">
                            <a class="fancybox zoom info" href="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>"></a>
                            <a class="link info" href="<?php the_permalink(); ?>"></a>
                        </div>	
	                </div>              
	              <div class="layer_txt">
	                  <h3><a title="<?php the_title(); ?>" rel=""><?php the_title(); ?></a></h3>
                      <div class="clear"></div>
	                  <p class="content_txt"><?php the_excerpt(); ?> </p>
	                  <div class="content_price"><a class="price_folio" href="<?php the_permalink(); ?>">More Info</a></div>
	              </div>
	            </div><!--end post-->
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
            </div><!--Categories: Multiple Day Tours-->            

            <div><!--Categories: Speciality Tours-->    
                <?php $loop = new WP_Query( array('post_type'=>'speciality_tours', 'posts_per_page'=>6)); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="america box col4 hover-item">
	               <div class="view view-first">
                       <!--have to find a way to insert this img, TWICE!-->
                        <img class="imgTop" alt="Ipsum" src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>"/>
	                    <div class="abs">
                            <a class="fancybox zoom info" href="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>"></a>
                            <a class="link info" href="<?php the_permalink(); ?>"></a>
                        </div>	
	                </div>              
	              <div class="layer_txt">
	                  <h3><a title="<?php the_title(); ?>" rel=""><?php the_title(); ?></a></h3>
                      <div class="clear"></div>
	                  <p class="content_txt"><?php the_excerpt(); ?> </p>
	                  <div class="content_price"><a class="price_folio" href="<?php the_permalink(); ?>">More Info</a></div>
	              </div>
	            </div><!--end post-->
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
            </div><!--Categories: Speciality Tours-->            
            
          </div><!--Category: tours-->
    </div>
</div>


<!--WP: Widget of gallery slider-->    
    
<div class="slidePoint" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
	<div class="padding_slide5">
		<div class="bord_top"></div>
		<div class="container clearfix">
			<div  class="grid_12">
			</div>
		</div>
		
		<div class="flexslider">
			<ul class="slides">
                <!--beginning of advertisement posts-->
                <?php $loop = new WP_Query( array('post_type'=>'advert', 'posts_per_page'=>12)); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    <li>
                    <div class="flex-caption">
			            <div class="flex-content">
			                <h3><?php the_title(); ?></h3>
			                <p class="price_gallery"><?php the_content(); ?></p>
                        </div>
			        </div>
                    <img src="<?php
                              if (class_exists('Dynamic_Featured_Image')){
                                  global $dynamic_featured_image;
                                  $featured_images = $dynamic_featured_image->get_featured_images();
                                  echo $featured_images[0]['full'];
                              }
                              ?>" alt=""/>
                </li>
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                <!--end of advertisement posts-->
			</ul>
		</div>
		
	</div>
</div>
    
<!--WP: End of Widget of gallery slider-->   

    
<!--WP: Widget of Contact Form-->     
    <div class="slidePoint" id="slide10" data-slide="10" data-stellar-background-ratio="0.5" >
        
	<div class="container clearfix" >
      <a name="contactForm"></a>
		<div class="grid_12 tit_contact">
			<h1><span>Contact</span></h1>
			<h2 style="line-height:34px !important;">Do you want us to organise your dream holiday itinerary in Ireland? Then send us an e-mail today and we will make sure your wishes come true.</h2>
		</div>
		<div class="clear"></div>
		
		<div class="grid_4 serv_block_contact form_contact" >
			<img class="icon_img" src="images/icon5.jpg" alt=""/>
			<h4>Contact form</h4>
			<div class="clear"></div>
			<div class="contact_form">  
				<div id="note"></div>
				<div id="fields">
					<form id="ajax-contact-form" action="#">
						<input type="text" name="name" value="" placeholder="Name" />
						<input type="text" name="email" value="" placeholder="Email" />
						<textarea name="message" id="message" placeholder="Message"></textarea>
						<div class="clear"></div>
						<input type="reset" class="contact_btn" value="Clear Form" />
						<input type="submit" class="contact_btn send_btn" value="Send" />
						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
		<div class="grid_4 contact_det_block serv_block_contact details_contact">
			<img class="icon_img" src="images/icon4.jpg" alt=""/>
			<h4>Details</h4>
			<div class="clear"></div>
			<ul class="foot_block_intouch">
				<li class="touch_phone"><p>353 89 969 5499, UK: 0800 7834 191</p></li>
				<li class="touch_clock"><p>Mon - sun 9AM to 5PM</p></li>
				<li class="touch_mail"><a href="mailto:info@elegantirishtours.com"> info@elegantirishtours.com</a></li>
				<li class="touch_site"><a href="javascript:void(0);"> http://www.elegantirishtours.com</a></li>
				<li class="touch_adress"><p>Westerton House, Westerton Rise, Ballinteer - Dublin 16, Ireland</p></li>
                <div style="height:25px;"></div>
			</ul>
		</div>
		<div class="grid_4 contact_det_block omega serv_block_contact">
			<img class="icon_img" src="images/icon6.jpg" alt=""/>
			<h4>Get Social</h4>
			<div class="clear"></div>
			<ul class="foot_block_intouch">
              <li class="facebook"><a href="javascript:void(0);">http://facebook.com/companyname</a></li>
			  <li class="twitter"><a href="javascript:void(0);">http://twitter.com/companyname</a></li>
              <div style="height:165px;"></div>
            </ul>
		</div>
		<div class="clear"></div>

	</div>
<!--WP: End of Widget of Contact Form-->

<!--WP: Widget of Map-->        
	<div id="map_block"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=Westerton+House,+Westerton+Rise,+Ballinteer+-+Dublin+16,+Ireland&amp;ie=UTF8&amp;hq=Westerton+House,+Westerton+Rise,+Ballinteer+-+Dublin+16,+Ireland&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=53.173676,-6.289774&amp;spn=0.336395,0.088603&amp;output=embed"></iframe></div>
	
</div>
<!--WP: End of Widget of Map--> 

  <script src="wp-content/themes/elegant/js/jquery.transit.js" type="text/javascript"></script>
    <script src="wp-content/themes/elegant/js/slider/functions.js" type="text/javascript"></script>

	<script type="text/javascript" src="wp-content/themes/elegant/js/radio.js"></script>
	<script type="text/javascript" src="wp-content/themes/elegant/js/JScript.js"></script>
	<script type="text/javascript" src="wp-content/themes/elegant/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="wp-content/themes/elegant/js/waypoints.min.js"></script>
    
    <script src="wp-content/themes/elegant/js/coordmap.js" type="text/javascript"></script>
    <script src="wp-content/themes/elegant/js/init.js" type="text/javascript"></script>
    

    <script src="wp-content/themes/elegant/js/jquery.jcarousel.js" type="text/javascript"></script>
    <script src="wp-content/themes/elegant/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#ajax-contact-form").submit(function () {
                var str = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo get_template_directory_uri();?>/contact_form/contact_process.php",
                    data: str,
                    success: function (msg) {
                        // Message Sent - Show the 'Thank You' message and hide the form
                        if (msg == 'OK') {
                            result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
                            $("#fields").hide();
                        } else {
                            result = msg;
                        }
                        $('#note').html(result);
                    }
                });
                return false;
            });

        });		
    </script>
    <div id="valHeight"></div>
	
    <script type="text/javascript">	    /*$($.date_input.initialize);*/</script>
    <!--SlidetTop-->
	<!-- jQuery KenBurn Slider  -->	
	<script type="text/javascript" src="wp-content/themes/elegant/js/slide/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="wp-content/themes/elegant/js/slide/jquery.themepunch.revolution.min.js"></script>	

     <!--Slider-->

<!--WP: Footer--> 
    <div id="footer">    

        <!--The following content is original in the footer of the index page-->    
    <!--
			##############################
			 - ACTIVATE THE BANNER HERE -
			##############################
			-->
			<script type="text/javascript">

			    var tpj = jQuery;
			    //			    tpj.noConflict();

			    tpj(document).ready(function () {

			        if (tpj.fn.cssOriginal != undefined)
			            tpj.fn.css = tpj.fn.cssOriginal;

			        tpj('.fullwidthbanner').revolution(
			            {
			                delay: 900000,
			                startwidth: 890,
			                startheight: 650,

			                onHoverStop: "on", 					// Stop Banner Timet at Hover on Slide on/off

			                thumbWidth: 100, 						// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			                thumbHeight: 50,
			                thumbAmount: 4,

			                hideThumbs: 200,
			                navigationType: "both", 				//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
			                navigationArrows: "verticalcentered", 	//nexttobullets, verticalcentered, none
			                navigationStyle: "round", 			//round,square,navbar

			                touchenabled: "on", 					// Enable Swipe Function : on/off

			                navOffsetHorizontal: 0,
			                navOffsetVertical: 20,

			                fullWidth: "on",

			                shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

			            });




			    });
			</script>
        <!--And Slider-->	
        

<?php get_footer(); ?>