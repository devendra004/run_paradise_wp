 <?php

  $feture_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $feture_image_link = $feture_image[0];

?>

<div class="banner_common" style="background:url('<?php echo $feture_image_link; ?>')">
  <div class="layer">
  </div>
  <div class="banner_common_contain">
   
    <h3><?php the_title(); ?></h3>
    <div class="span_line"></div>
 
 <!--   <div class="banner_countdown">
      	<ul class="countdown">
      		<li>
      			<span class="days">00</span>
      			<p class="days_ref">days</p>
      		</li>
      		<li>
      			<span class="hours">00</span>
      			<p class="hours_ref">hours</p>
      		</li>
      		<li>
      			<span class="minutes">00</span>
      			<p class="minutes_ref">minutes</p>
      		</li>
      		<li>
      			<span class="seconds last">00</span>
      			<p class="seconds_ref">seconds</p>
      		</li>
      	</ul>

    </div>-->

  </div>
</div>
