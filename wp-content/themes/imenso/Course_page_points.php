<div class="race_detail_points comm_pad ">
  <div class="container">
    <div class="row">

    <h1 class="comm_heading site_white text-center">Course information</h1>
	<p class="sub_heading site_white text-center"> Take a look at our Important information of race </p>
			<div class="points_icon_wrp">	
			    <?php

				 $information_category = get_field('information_point_category');
			        $args = array(
			            'post_type'         =>  'common_post',
			            'posts_per_page'    =>  20,
			            'order'             =>  'ASC',
			            'tax_query' => array(
			                    array(
			                        'taxonomy' => 'custom_category', //or tag or custom taxonomy
			                        'field' => 'id',
			                        'terms' => array($information_category)
			                    )
			                )
			            );
				   query_posts( $args );
				    ?>
				   <?php if ( have_posts() ) : ?>
				   <?php while ( have_posts() ) : the_post(); ?>

				  <?php

					$feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$feture_image_link = $feture_image[0];
					$slect_post_icon = get_field("select_post_icon");
	
				  ?>


					<div class="col-lg-6 points_icon_inr pad_0 wow fadeInUp col-sm-6" data-wow-duration="1s">
						
						<div class="col-lg-3 points_icon">	
							<img src="<?php echo ($slect_post_icon) ;?>">
						</div>
						<div class="col-lg-9 points_detail">	
							<div class="points_detail_heading">	
								<h3><?php the_title() ;?></h3>
							</div>
							<div class="points_detail_contain">	
							<p><?php the_excerpt() ;?></p>
							</div>
						</div>
					</div>
						

				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
						
					
			</div>

    </div>


  </div>
</div>
