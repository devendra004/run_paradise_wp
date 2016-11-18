
<section class="race_information ">
  <div class="container comm_pad">
    <div class="row wow fadeInUp" data-wow-duration="1s">
        <div class="race_information_innr">
            <div class="col-lg-6 pad_0 col-sm-7 race_information_innr_wrp back_dark_gray">
              <div class="">

                <div class="col-sm-12 pad_0">
                  <div class="col-sm-4 pad_0">
                    <div class="race_info_heading">
                      <p> <?php echo get_field('section_1_heading'); ?> </p>
                    </div>
                  </div>

                  <div class="col-sm-8 pad_0">
                    <div class="race_info_dis">
                    <p>
                     <?php echo get_field('section_1_text'); ?>
                    </p>
                  </div>
                </div>

                <div class="col-sm-4 pad_0">
                  <div class="race_info_heading">
                    <p> <?php echo get_field('section_2_heading'); ?> </p>
                  </div>
                </div>

                <div class="col-sm-8 pad_0">
                  <div class="race_info_dis">
                    <p>
                     <?php echo get_field('section_2_text'); ?>
                    </p>
                  </div>
                </div>

            <div class="col-sm-4 pad_0">
              <div class="race_info_heading">
                <p> <?php echo get_field('section_3_heading'); ?> </p>
              </div>

              <div class="register_btn margin_t40">
               <a href="<?php echo get_field('link_btn'); ?>" target="_blank" class="hvr-float-shadow">Register </a>
              </div>
            </div>

              <div class="col-sm-8 pad_0">
                <div class="race_info_dis">
                   <p> <?php echo get_field('section_3_text'); ?> </p>
                </div>
              </div>
           </div>

              </div>
            </div>
            <div class="col-lg-6 pad_0 col-sm-5 race_information_innr_wrp flex_verticle  ">

                 <iframe width="100%" height="320" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo get_field('race_video'); ?>">
                  </iframe>

            </div>
          </div>
</section>


<section class="box_grid comm_pad gray_back">

  
    <div class="container wow fadeInUp" data-wow-duration="1s" >

       <div class="box_grid_inr">



       <?php
                      global $wp_query;
                      global $query_string;
                      $args = array('post_type' => 'grid_box',
                        'posts_per_page' => 4,
                        'order' => 'DSC',
                        );
                     query_posts( $args );
                    ?>
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                      
                      $feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                      $feture_image_link = $feture_image[0];

                ?>                              
                      <div class="col-lg-3 col-sm-6 pad_0">
                      <a href="<?php echo get_field('grid_box_link'); ?>">
                          <div class="box_grid_inr_box" style="background:url('<?php echo $feture_image_link; ?>')">
                             <div class="layer"> </div>
                              
                             <h3 class="comm_h3 site_white "><?php the_title(); ?></h3>

                          </div>
                        </a>
                       </div>


      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

         

       </div>

   </div> 


</section>

