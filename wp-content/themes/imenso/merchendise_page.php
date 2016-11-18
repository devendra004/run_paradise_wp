<?php
/* Template Name: merchendise_temp */
get_header();
global $post;
//print_r($post);
if(have_posts())
{
  while (have_posts()) : the_post();

  endwhile;
}

?>
<?php get_template_part('common_banner'); ?>


<section class="merchendise gray_back">

  	<div class="container ">


	  	<div class="row wow fadeInUp " data-wow-duration="1s">
	  		<div class="merchendise_row_heading comm_pad_50">
	  			
					<h1 class="comm_heading site_orange text-center"><?php the_title() ; ?></h1>
				   <p class="sub_heading  text-center"> <?php the_content() ; ?> </p> 

	  		</div>

	  		<div class="merchendise_wrp margin_b">
			<div class="row ">
			<div class="col-lg-8 col-lg-offset-2">

								  	         
						<?php
						   global $wp_query;
						   global $query_string;
						   $args = array('post_type' => 'merchandise_detail',
						   'posts_per_page' => 12,
						   'order' => 'ASC',
						   );
						   query_posts( $args );
						   $i=0;
						   $count=1;
						   
						    ?>
							 <?php if ( have_posts() ) : ?>
							 <?php while ( have_posts() ) : the_post(); ?>
							 <?php

							$feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$feture_image_link = $feture_image[0];

							?>

	                  			<div class="col-sm-6">
								  <div class="merchendise_img_wrp">
								     <div class="">
								          <div class="merchendise_iner_img merchendise_img">

								             <img src="<?php echo $feture_image_link; ?>" alt="" title="" />
                                           </div>
								        </div>
											<div class="merchendise_contain text-center margin_b30 margin_t20">
												<h3 class="comm_h3 wow fadeInUp margin_b20">
												   <a class="site_blue" href="#"> <?php echo the_title(); ?> </a> </h3>

												    <p class="text-center"> <?php the_content() ; ?> </p>

											
											</div>
										</div>
									</div>

                                 
								<?php 
                                    $count=$count+2;
                                  
								endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>

                 </div>
	  		</div>
 		</div> 

 	</div>
</section>


<?php
get_footer();
?>