<?php
/* Template Name: oursponser_temp */
get_header();
global $post;
//print_r($post);
if(have_posts())
{
  while (have_posts()) : the_post();

  endwhile;
}
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_array->ID ), 'single-post-thumbnail' );
    $fetured_image_url = $image[0];   

?>
<?php get_template_part('common_banner'); ?>

<section class="opportunities">
  <div class="wow fadeInUp" data-wow-duration="1s" >
     <div class="row">

          <div class="col-lg-6 padd_0 col-sm-6">
            
            <img src="<?php echo get_field('sponsor_image') ?>" class="img-responsive"  alt="" />
          </div>  

           <div class="col-lg-6 col-sm-6">
             <div class="">
               <a href="http://phuketmarathon.com/th/wp-content/uploads/sites/2/2015/08/LPIM16Eng.cz_.pdf" target="blank_"> <h1  class="opportunities_heading  text-center margin_b40"><?php echo get_field('sponsor_heading') ;?></h1> </a> 
              </div>    
           </div>

          </div>
  </div>
</section>

<section class="sponser comm_pad_50"> 

 <div class="container wow fadeInUp" data-wow-duration="1s" >

   <div class="row sponser_inr com_h2">
          <h1  class="comm_heading site_blue text-center margin_b40"> Our Sponsors </h1>


          <div class="col-lg-3 sponser_text our_sponser_flex marg_t60">
             <div class="title_sponser_image">
               <a href="http://www.lagunaphuket.com" target="_blank"><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon8.png" alt="" /></a>

               <P> Title Sponsor </P>
             </div>

          </div>

          <div class="col-lg-9">
             
               <div class="row">
                     
                      <div class="col-lg-6 sponser_text"> 
                           <div class="sponser_inner our_sponser_flex">
                           
                              <div class="sponser_image">
                                 <a target="_blank" href="http://www.thaibev.com/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon9.png" alt="" /></a>
                               </div>

                               <div class="sponser_image">
                                 <a target="_blank" href="http://www.tourismthailand.org/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon10.png" alt="" /> </a>
                               </div>
                          </div>     
                            
                             <p class="text-center"> Co-Sponspors </p>

                      </div>

                      <div class="col-lg-6 sponser_text"> 
                           <div class="sponser_inner our_sponser_flex">
                           
                              <div class="sponser_image">
                                 <a target="_blank" href="http://www.esquire.com/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon11.png" alt="" /></a>
                               </div>

                               <div class="sponser_image">
                                 <a target="_blank" href="http://www.image-asia.com/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon12.png" alt="" /></a> 
                               </div>

                               <div class="sponser_image">
                                 <a target="_blank" href="http://www.thephuketnews.com/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon13.png" alt="" /></a> 
                               </div>
                          </div>     
                            
                           <p class="text-center"> Media Partners </p> 

                      </div>
                   </div>          
 
                <div class="clearfix"></div>

              <div class="row margin_t30">
                      <div class="col-lg-6 sponser_text"> 
                           <div class="sponser_inner our_sponser_flex">
                           
                              <div class="sponser_image">
                                 <a target="_blank" href="http://th.oakley.com/en"><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon18.png" alt="" /></a>
                               </div>

                               <div class="sponser_image">
                                 <a target="_blank" href="http://www.seiko.co.th/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon19.png" alt="" /></a>
                               </div>
                             
                              <div class="sponser_image">
                                <a target="_blank" href="http://www.phukethospital.com/" > <img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon15.png" alt="" /></a>
                              </div>
                                
                          </div>     
                            
                            <p class="text-center"> Official Suppliers </p>

                      </div>

                     <div class="col-lg-6 sponser_text"> 
                          <div class="sponser_inner our_sponser_flex">
                           
                              <div class="sponser_image">
                                 <a class="logo tceb-logo" href="#" title="TCEB"><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon6.png" alt="" /></a>
                               </div>

                               <div class="sponser_image">
                                 <a target="_blank" href="http://www.sat.or.th/" title="Sports Authority of Thailand"><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon5.png" alt="" /></a>
                               </div>

                                <div class="sponser_image">
                                 <a target="_blank" href="http://www.tourismthailand.org/" title="Tourism Authority of Thailand" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon4.png" alt="" /></a>
                               </div>

                          </div>     
                            
                           <p class="text-center"> Supporting Authorities </p>

                      </div>
                </div> 

                <div class="row margin_t30">
                   <div class="col-lg-12 text-center site_blue font_16">

                        <div class="sponser_inner our_sponser_flex">
                           
                            <div class="sponser_image">
                               <a target="_blank" href="http://www.gotorace.com/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon20.png" alt="" /></a>

                               <p> Online Registration Partner </p>

                             </div>

                             <div class="sponser_image">
                               <a target="_blank" href="http://www.sportstats.asia/"><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon21.png" alt="" /></a>

                               <p> Official Timer </p>

                             </div>

                              <div class="sponser_image">
                               <a target="_blank" href="http://www.goadventureasia.com/"><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon22.png" alt="" /> </a>

                                <p> Organizer </p>

                             </div>

                              <div class="sponser_image">
                               <a target="_blank" href="http://paulpoole.co.th/" ><img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/icon23.png" alt="" /> </a>

                                <p> Marketing Support </p>

                             </div>
                      </div>     
                            
                           
                   </div>
                </div>   
         </div>    
  

   </div> 
  </div>
</section>

<?php
get_footer();
?>