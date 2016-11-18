<section class="race_information ">

  <div class="container-fluid ">


  <div class="row" >

     <div class="col-lg-6  min_height  gray_back padd_15">
            
             <?php $info_content = get_field('info_section_content'); ?>
              <?php echo apply_filters('the_content',$info_content); ?>
          
            <!--<div class="panel registration_detail_table ">
              <div class="panel-heading gray_back">
                  <h3 class="comm_heading site_orange text-center"><?php //echo get_field('info_section_heading'); ?></h3>
              </div>

              

               <table class="table table-hover registration_pad" id="dev-table">
                <thead>
                  <tr>
                    <th>Distance</th>
                    <th>Distance</th>
                    <th>Start Time</th>
                    <th>Time Limit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2 km Kids Run</td>
                    <td>2.00 km</td>
                    <td>3 June 2017 – PM</td>
                    <td>–</td>
                  </tr>
                  <tr>
                    <td>10.5 km Run</td>
                    <td>10.50 km</td>
                    <td>3 June 2017 – PM</td>
                    <td>2 hours 30 minutes</td>
                  </tr>
                  <tr>
                    <td>5km Run</td>
                    <td>5.00 km</td>
                    <td>3 June 2017 – PM</td>
                    <td>2 hours</td>
                  </tr>
                  <tr>
                    <td>Half Marathon</td>
                    <td>21.097KM</td>
                    <td>4 June 2017 – AM</td>
                    <td>4 hours</td>
                  </tr>
                  <tr>
                    <td>Marathon</td>
                    <td>42.195 km</td>
                    <td>4 June 2017 – AM</td>
                    <td>7 hours 30 minutes</td>
                  </tr>
                </tbody>
              </table> 
              
            
            </div>-->
    </div>

    <div class="col-lg-6 padd_0 regi_banner " style="background:url('<?php echo get_field('info_section_image'); ?>')">

        <div class="wht_bg">

          <h1 class="comm_heading site_orange text-center"><?php echo get_field('info_section_button_text'); ?></h1>

          <a target="_blank" href="<?php echo get_field('info_section_button_link'); ?>"><img src="<?php echo get_field('info_section_button_image'); ?>" alt=""
          class="result_logo" /></a>

        </div>

    </div>


          </div>



</section>