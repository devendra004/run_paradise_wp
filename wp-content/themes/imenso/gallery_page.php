<?php
/* Template Name: gallery page */
get_header();
get_template_part('common_banner');


?>
<section class="gallery comm_pad gray_back">

  	<div class="container">


	  	<div class="row wow fadeInUp" data-wow-duration="1s">
			
	        <div class="gallery_innr">

					<?php echo do_shortcode('[unitegallery Gallery_latest catid=2]'); ?>
		
			</div>
		</div> 
 	</div> 
</section>


<?php
get_footer();
?>






