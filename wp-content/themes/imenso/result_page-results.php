<section class="result">
   <div class="container ">
			<div class="row wow fadeInUp" data-wow-duration="1s">
					<?php
				        global $wp_query;
				        global $query_string;
				        $args = array('post_type' => 'results',
				          'posts_per_page' => 24,
				          'order' => 'ASC',
				          );
				       query_posts( $args );
				      ?>
				      <?php if ( have_posts() ) : ?>
				      <?php while ( have_posts() ) : the_post(); ?>
				      <?php
				        
				        $feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				        $feture_image_link = $feture_image[0];
			       ?>
			      	<div class="col-lg-4 col-sm-6">
						<div class="result_box">
					 		<div class="result_box_heading">
					 			<h3 class="comm_h3 site_yellow"><?php the_title(); ?></h3>
					 		</div>
					 		<div class="result_box_contain">
					 			<?php the_content(); ?>
					 		</div>
						 </div>
					</div>         
			      <?php endwhile; ?>
			      <?php endif; ?>
			      <?php wp_reset_query(); ?>
			</div> 
   </div> 
</section>













