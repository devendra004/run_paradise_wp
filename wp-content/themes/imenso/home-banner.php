<div class="new_slider">

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

        <?php
                $args = array(
                    'post_type'         =>  'slider',
                    'posts_per_page'    =>  4,
                    'order'             =>  'ASC'
                    );
                query_posts( $args );
                $count= 0;
                $active_class = 'active';


                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_array->ID ), 'single-post-thumbnail' );
                        $fetured_image_url = $image[0];   
                        
                        ?>
                       
                   <div class="item <?php if($count == 0) {echo $active_class;}   ?> slide<?php echo $count; ?>" style="background:url('<?php echo $fetured_image_url; ?>')">
                                <div class="layer <?php echo $count; ?>"></div>
                                <div class="row">
                                    <div class="container">
                                           <div class="banner">
                                               <div class="banner_contain">
                                                   <h1 ><?php the_title(); ?></h1>
                                                    <h3><?php the_content(); ?> </h3>
                                                    <?php echo do_shortcode('[show_time_counter_rj]'); ?>
                                                    <div class="banner_countdown">
                                                        <ul class="countdown">
                                                            <li>
                                                                <span class="days">00</span>
                                                                <p class="days_ref">days</p>
                                                            </li>
                                                            <li>
                                                                <span class="hours">00</span>
                                                                <p class="hours_ref">hours</p>
                                                            </li>
                                                            <li>
                                                                <span class="minutes">00</span>
                                                                <p class="minutes_ref">minutes</p>
                                                            </li>
                                                            <li>
                                                                <span class="seconds last">00</span>
                                                                <p class="seconds_ref">seconds</p>
                                                            </li>
                                                        </ul>
                                                     
                                                    </div>
                                               </div>
                                           </div>
                                    </div>
                                </div>
                            </div> 
                        <?php
                         $count++;
                    endwhile;
                endif;

                wp_reset_query();

            ?>

          
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>


</div>

<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery('.countdown').downCount({
   date: jQuery('.counter_date').attr('date'),
    offset: +1
  });
});
</script>