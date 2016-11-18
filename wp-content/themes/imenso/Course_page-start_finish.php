<?php the_content(); ?>
<?php /*
<div class="course_map_wrp ">
  <div class="container-fluid pad_0">
  
    <div class="row">
      
    <div class="col-lg-6 wow fadeInUp pad_0" data-wow-duration='1s'>
            
        <div class="course_google_map">
            
           <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15804.053947750825!2d98.2978434!3d7.9975434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdbefe625c3b3e1b6!2sLaguna+Grove!5e0!3m2!1sen!2sth!4v1472802835982" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
           <?php 

              $location = get_field('add_google_map');

              if( !empty($location) ):
              ?>
              <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
              </div>
              <?php endif; ?>

        </div>
    </div>        
  <div class="col-lg-6 wow fadeInUp pad_0 gray_back" data-wow-duration="1s" >
              
          <div class="course_google_map_right flex_verticle">

              <h3 class="comm_heading text-center site_blue wow fadeInUp margin_b20" data-wow-duration="1s"> Start & Finish Line </h3>
              
            <h3 class="comm_h3 "><span class="map_right_icon_img"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/06/calendar.png "></span><span>Saturday 3 & Sunday 4 June 2017</span></h3>
             <h3 class="comm_h3 "> <span class="map_right_icon_img"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/06/signs.png "></span><span>Laguna Grove</span></h3>
             <h3 class="comm_h3 "><span class="map_right_icon_img"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/06/technology.png "></span><span>390/1 Moo1 Srisoonthorn Road, Cherngtalay, Thalang, Phuket 83110, Thailand</span></h3>

          </div>
      </div> 
    </div>


  </div>
</div>
*/ ?>
