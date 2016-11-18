<?php
/* Template Name: charity page */
get_header();
get_template_part('common_banner');


?>
<div class="charity_innr">
					
				<?php
				   global $wp_query;
				   global $query_string;
				   $args = array('post_type' => 'charity_detail',
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
							    <div class="col-lg-6 charity_image_height comm_image_back" style="background:url('<?php echo $feture_image_link;?>')">
							    </div>
						       	<div class="col-lg-6 charity_image_height hotel_comm_pad">
						       		<div class="hotel_heading  ">
						       			<h2 class="site_blue"><?php the_title(); ?></h2>
						       		</div>
						    			<div class="charity_contain">
						    				
						    				<?php the_content(); ?>
						    			</div>
								</div>
							</div> 
						<?php }else{ ?>

							<div class="row ">
							  
						       	<div class="col-lg-6 charity_image_height hotel_comm_pad">
						       		<div class="hotel_heading  ">
						       			<h2 class="site_blue"><?php the_title(); ?></h2>
						       		</div>
						    			<div class="charity_contain">
						    				
						    				<?php the_content(); ?>
						    			</div>
								</div>
								<div class="col-lg-6 charity_image_height comm_image_back" style="background:url('<?php echo $feture_image_link;?>')">
							    </div>
							</div>
							<?php } 
						$i++;
						?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); 

				

				?>
			</div>



<?php
get_footer();
?>






