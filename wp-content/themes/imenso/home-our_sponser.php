<section class="sponser comm_pad_50"> 

 <div class="container wow fadeInUp" data-wow-duration="1s" >

   <div class="row sponser_inr com_h2">
          <h1  class="comm_heading site_blue text-center margin_b40"> Our Sponsors </h1>
          <?php 
            $atts['taxonomy'] = 'client_logo_cat';
            $content = '';
            $job_categories = show_categories($atts, $content);?>
            <?php
            $price = array();
            $temp_array = array();
            for($i = 0;$i<count($job_categories);$i++)
            {
              $price[$i] = $job_categories[$i]->count;
              $temp_array[$i]['name'] = $job_categories[$i]->name;
              $temp_array[$i]['count'] = $job_categories[$i]->count;
              $temp_array[$i]['id'] = $job_categories[$i]->term_id;
              
            }
            array_multisort($price, SORT_DESC, $temp_array);

            $price1 = array();
            $temp_array1 = array();
            for($i = 0;$i<count($job_categories);$i++)
            {
              $price1[$i] = $job_categories[$i]->term_id;
              $temp_array1[$i]['name'] = $job_categories[$i]->name;
              $temp_array1[$i]['count'] = $job_categories[$i]->count;
              $temp_array1[$i]['id'] = $job_categories[$i]->term_id;
              
            }
            array_multisort($price1, SORT_ASC, $temp_array1);
            
            for ($i=0; $i <count($temp_array1) ; $i++) { 
              if($temp_array1[0]['id'] == $temp_array[$i]['id'])
              {
                unset($temp_array[$i]);
              }
            }
            ?>
            <?php //print_r($temp_array); echo '</br></br></br>';?>
            <?php //print_r($temp_array1); ?>

          <div class="col-lg-3 sponser_text our_sponser_flex marg_t60">
              <?php
                $args = array(
                'post_type'         =>  'client_logo',
                'order'             =>  'DESC',
                'tax_query' => array(
                        array(
                            'taxonomy' => 'client_logo_cat', //or tag or custom taxonomy
                            'field' => 'id',
                            'terms' => array($temp_array1[0]['id'])
                        )
                    )
                );
                query_posts( $args );
                if ( have_posts() ) : ?>
                  <div class="title_sponser_image">
                  <?php while ( have_posts() ) : the_post(); ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_array->ID ), 'single-post-thumbnail' );
                        $fetured_image_url = $image[0]; ?>
                      <a href="<?php the_field('link_btn'); ?>" target="_blank"><img src="<?php echo $fetured_image_url; ?>" alt="" /></a>
                  <?php endwhile; ?>
                      <P> <?php echo $temp_array1[0]['name']; ?> </P>

                  </div>
                <?php endif; wp_reset_query(); ?>
          </div>

          <div class="col-lg-9">
            
              <?php
                $temp_count = 0;
                $temp_count1 = 0;
                for ($i=0; $i < count($temp_array); $i++) { 
                  
                  if($temp_count % 12 == 0 || $i == 0){
                    if($i > 0) {$classl = 'margin_t30';}
                    ?><div class="row <?php echo $classl; ?>" <?php echo $temp_count; ?>><?php
                  }
                  if($temp_array[$i]['count']>1){ $temp_count = $temp_count+6;}else{ $temp_count = $temp_count+3;}
                  $args = array(
                  'post_type'         =>  'client_logo',
                  'order'             =>  'DESC',
                  'tax_query' => array(
                          array(
                              'taxonomy' => 'client_logo_cat', //or tag or custom taxonomy
                              'field' => 'id',
                              'terms' => array($temp_array[$i]['id'])
                          )
                      )
                  );
                  query_posts( $args );
                  if ( have_posts() ) :
                    if($temp_array[$i]['count']>1){
                      ?><div class="col-lg-6 sponser_text"> 
                           <div class="sponser_inner our_sponser_flex"><?php
                    }else{
                      ?><div class="col-lg-3 text-center site_blue font_16 col-sm-3">

                          <div class="sponser_inner our_sponser_flex">
                           
                            <div class="sponser_image"><?php
                    }
                    
                    while ( have_posts() ) : the_post();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_array->ID ), 'single-post-thumbnail' );
                        $fetured_image_url = $image[0];
                        if($temp_array[$i]['count']>1){
                          ?><div class="sponser_image">
                                 <a target="_blank" href="<?php the_field('link_btn'); ?>" ><img src="<?php echo $fetured_image_url; ?>" alt="" /></a>
                               </div><?php
                        }else{
                          ?>
                               <a target="_blank" href="<?php the_field('link_btn'); ?>"><img src="<?php echo $fetured_image_url; ?>" alt="" /></a>
                               
                            <?php
                        }
                      
                  endwhile;
                  
                  if($temp_array[$i]['count']>1){
                      ?></div> <p class="text-center"> <?php echo $temp_array[$i]['name']; ?> </p>
                           </div><?php
                    }else{
                      ?><p> Official Timer </p></div></div></div>
                   <?php
                    }
                  endif;
                  if($temp_count % 12 == 0){
                    ?></div><div class="clearfix"></div><?php
                  }
                  wp_reset_query();
                }
              ?>
              
               
         </div>    
  

   </div> 
  </div>
</section>