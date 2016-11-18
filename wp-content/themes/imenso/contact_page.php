<?php
/* Template Name: contact page */
get_header();
get_template_part('common_banner');

$feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$feture_image_link = $feture_image[0];

?>
<section class="contact comm_pad ">

  	<div class="container">

  			<div class="row">

  			    <div class="col-lg-4 text-center">

  			      <div class="contact_add  contact_icon">
  			      	  <p> <i class="fa fa-map-marker fa-3x site_blue"></i> </p> 

  			      	  <p class="contact_p"> phuket </p>
  			      </div>
  			    	

  			    </div>

  			    <div class="col-lg-4 text-center">
  			    	
  			    	<div class="contact_cont  contact_icon">
  			    		<p><i class="fa fa-phone fa-3x site_blue"></i></p>

  			    		<p class="contact_p"> 0764-989879 </p>

  			    	</div>
  			    </div>

               <div class="col-lg-4 text-center">
               	
               	 	<div class="contact_mail contact_icon">
  			    	 <p style="display:inline-flex;"><i class="fa fa-envelope fa-3x site_blue"></i></p>

  			    	 <p class="contact_p"> www.example@gmail.com </p>
  			    		
  			    	</div>
               </div>

			  </div>

        


					<!--    <div class="col-lg-6 hotel_image_height hotel_comm_pad">
					    	<div class="contact_form">
					       			<div class="contact_sub"><h3>We will get back to you as soon as possible</h3></div>

					       			<?php echo do_shortcode('[contact-form-7 id="214" title="Contact"]'); ?>

					       </div>
					    </div>

					   	<div class="col-lg-6 hotel_image_height comm_image_back" style="background:url('<?php echo $feture_image_link;?>')">
					    </div> -->
	 
 	</div> 
</section>

<section class="comm_pad gray_back contact_us ">
  <div class="layer"> </div>
  <div class="container">

        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">

          <div class="contact_heading">
           
            <h3> Talk Now </h3>

            <p> Please complete the form below with your personal information and the details of your inquiry. We will get back to you as soon as possible. </p>

            </div>

             <?php echo do_shortcode('[contact-form-7 id="213" title="Contact form 1"]'); ?>
              
          </div>
        </div>

  </div>
</section>





<?php
get_footer();
?>






