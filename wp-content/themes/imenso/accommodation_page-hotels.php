<section class="accommodation">

  	<div class="container-fluid ">


	  	<div class="row wow fadeInUp gray_back" data-wow-duration="1s">
	  		<div class="hotel_row_heading comm_pad_50">
	  			
		<?php the_content(); ?>

	  		</div>

	        <div class="accommodation_innr">
					
				<?php
				   global $wp_query;
				   global $query_string;
				   $args = array('post_type' => 'accommodation',
				   'posts_per_page' => 12,
				   'order' => 'ASC',
				   );
				   query_posts( $args );
				   $i=0;
				    ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					 <?php

						$feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						$feture_image_link = $feture_image[0];
						$rates = get_field("rates");
						if($i % 2 == 0)
						{
						?>
							<div class="row  ">
							    <div class="col-lg-6 hotel_image_height comm_image_back col-sm-6" style="background:url('<?php echo $feture_image_link;?>')">
							    </div>
						       	<div class="col-lg-6 hotel_image_height hotel_comm_pad col-sm-6">
						       		<div class="hotel_heading  ">
						       			<h2><?php the_title(); ?></h2>
						       		</div>
						       		<div class="hotel_price">
						       			<p>Rates start from THB <span><?php echo $rates; ?></span></p>
						       		</div>
						       		
						       		<div class="hotel_btn">
						       			<a class="hvr-float-shadow" href="<?php echo get_field('link_btn') ;?>">Coming Soon</a>
						       		</div>
								</div>
							</div> 
						<?php }else{ ?>

							<div class="row ">
							    <div class="col-lg-6 hotel_image_height hotel_comm_pad col-sm-6">
							    	<div class="hotel_heading  ">
						       			<h2><?php the_title();?></h2>
						       		</div>
						       		<div class="hotel_price">
						       			<p>Rates start from THB <span><?php echo $rates; ?></span></p>
						       		</div>
						       		<div class="hotel_btn">
						       			<a class="hvr-float-shadow"  href="<?php echo get_field('link_btn') ;?>">Coming Soon</a>
						       		</div>
							    </div>
							   	<div class="col-lg-6 hotel_image_height comm_image_back  col-sm-6" style="background:url('<?php echo $feture_image_link;?>')">
							    </div>
							</div>
							<?php } 
						$i++;
						?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div> 
 	</div> 
</section>













