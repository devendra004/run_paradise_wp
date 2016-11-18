<?php
$page_array =  get_field('race_video_page');

 ?>
<section class="race_video text-center">
  <div class="layer">

  </div>
  <div class="container">
    <div class="row">

        <div class="video_inr">
          <h1 class="comm_heading site_white"><?php echo get_the_title($page_array->ID); ?></h1>
          <p class="sub_heading site_white">
              Take a look at our latest race video
          </p>
        </div>
        <div class="video_iframe">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 wow fadeInUp" data-wow-duration="1s">
                  <iframe width="100%" height="325" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/QQjA_PNESzI?rel=0">
                  </iframe>
                </div>
            </div>

        </div>
            </div>
    </div>
</section>
