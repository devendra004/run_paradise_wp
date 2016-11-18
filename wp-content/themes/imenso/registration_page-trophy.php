<section class="trophy  comm_pad">
  <div class="container-fluid ">
		  <div class="row wow fadeInUp" data-wow-duration="1s">
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


				<div class="col-lg-6 col-sm-6">
					<div class="left_icon_wrp">	
						<div class="icon_trophy col-sm-4 text-right col-xs-4">
						<img src="<?php echo ($slect_post_icon) ;?>">
						
						</div>
						<div class="trophy_contain col-sm-8 com_h2 col-xs-8">
							<h2> <?php the_title() ;?> </h2>
							<p> <?php the_excerpt() ;?> </p>
						</div>
					</div>
				</div>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

			<!--	<div class="col-lg-6 col-sm-6">
					<div class="right_icon_wrp">
							<div class="icon_trophy col-sm-4 text-right col-xs-4">
								<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/06/shopping-bag-1.png">
							</div>
							<div class="trophy_contain col-sm-8 com_h2 col-xs-8">
								<h2> Drawstring Bag </h2>
								<p> Lorem Ipsum has been the industry's standard dummy text. </p>
							</div>	
					</div>
				</div> -->
		  </div>  
             
	</div>
</section>















