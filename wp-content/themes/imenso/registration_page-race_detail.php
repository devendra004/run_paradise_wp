<section class="registration_detail ">
  <div class="container comm_pad">
		  <div class="row wow fadeInUp" data-wow-duration="1s">
		  <div class="col-md-8 col-lg-offset-2 ">
       			
       			<?php the_content(); ?>
					
					<!--<div class="panel registration_detail_table ">
							<div class="panel-heading gray_back">
								<h3 class="panel-title site_orange"></h3>
							</div>

							     
							
							<table class="table table-hover " id="dev-table">
								<thead>
									<tr>
										<th>Distance</th>
										<th>Now – 30 June 2016</th>
										<th>1 Jul 2016 – 28 Feb 2017</th>
										<th>1 Mar-29 May 2017</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Marathon</td>
										<td>USD 75</td>
										<td>USD 90</td>
										<td>USD 105</td>
									</tr>
									<tr>
										<td>Half Marathon</td>
										<td>USD 65</td>
										<td>USD 80</td>
										<td>USD 95</td>
									</tr>
									<tr>
										<td>10.5 km Run</td>
										<td>USD 30</td>
										<td>USD 37</td>
										<td>USD 42</td>
									</tr>
									<tr>
										<td>5 km Run</td>
										<td>USD 16</td>
										<td>USD 19</td>
										<td>USD 22</td>
									</tr>
									<tr>
										<td>2 km Kids Run</td>
										<td>USD 10</td>
										<td>USD 12</td>
										<td>USD 14</td>
									</tr>
								</tbody>
							</table> 
						</div> -->
					</div>

  </div> 
</div>

<div class="gray_back  comm_pad"> 
  <div class="container">
   <div class="row wow fadeInUp " data-wow-duration="1s">

		          <div class="registration_detail_innr">

					<div class="col-md-12 ">
						
							

					  <?php $categories_content = get_field('categories_content'); ?>
				      <?php echo apply_filters('the_content',$categories_content); ?>
<!--							
<table class="table table-hover" id="dev-table">
<thead class="main-table-head">
<tr class="activated">
<th colspan="2" style="text-align: center">Marathon</th>
<th colspan="2" style="text-align: center">Half Marathon</th>
<th colspan="2" style="text-align: center">10.5 KM Run</th>
<th colspan="2" style="text-align: center">5 KM Run</th>
<th colspan="2" style="text-align: center">2 KM Kids Run</th>
</tr>
</thead>
<thead class="sub-table-head">
<tr>
<th style="text-align: center">Male</th>
<th style="text-align: center">Female</th>
<th style="text-align: center">Male</th>
<th style="text-align: center">Female</th>
<th style="text-align: center">Male</th>
<th style="text-align: center">Female</th>
<th style="text-align: center">Male</th>
<th style="text-align: center">Female</th>
<th style="text-align: center">Male</th>
<th style="text-align: center">Female</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align: center">18-29</td>
<td style="text-align: center">18-29</td>
<td style="text-align: center">16-29</td>
<td style="text-align: center">16-29</td>
<td style="text-align: center">13-19</td>
<td style="text-align: center">13-19</td>
<td style="text-align: center">12-16</td>
<td style="text-align: center">12-16</td>
<td style="text-align: center">open</td>
<td style="text-align: center">open</td>
</tr>
<tr>
<td style="text-align: center">30-39</td>
<td style="text-align: center">30-39</td>
<td style="text-align: center">30-39</td>
<td style="text-align: center">30-39</td>
<td style="text-align: center">20-29</td>
<td style="text-align: center">20-29</td>
<td style="text-align: center">open</td>
<td style="text-align: center">open</td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
</tr>
<tr>
<td style="text-align: center">40-49</td>
<td style="text-align: center">40-49</td>
<td style="text-align: center">40-49</td>
<td style="text-align: center">40-49</td>
<td style="text-align: center">30-39</td>
<td style="text-align: center">30-39</td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
</tr>
<tr>
<td style="text-align: center">50-59</td>
<td style="text-align: center">50 &amp; over</td>
<td style="text-align: center">50-59</td>
<td style="text-align: center">50 &amp; over</td>
<td style="text-align: center">40-49</td>
<td style="text-align: center">40-49</td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
<td></td>
<td></td>
</tr>
<tr>
<td style="text-align: center">60 &amp; over</td>
<td style="text-align: center"></td>
<td style="text-align: center">60 &amp; over</td>
<td style="text-align: center"></td>
<td style="text-align: center">50-59</td>
<td style="text-align: center">50-54</td>
<td style="text-align: left"></td>
<td style="text-align: left"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
</tr>
<tr>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
<td style="text-align: center">60-64</td>
<td style="text-align: center">55-59</td>
<td style="text-align: left"></td>
<td style="text-align: left"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
</tr>
<tr>
<td style="text-align: left"></td>
<td style="text-align: left"></td>
<td style="text-align: left"></td>
<td style="text-align: left"></td>
<td style="text-align: center">65 &amp; over</td>
<td style="text-align: center">&nbsp;60 &amp; over</td>
<td style="text-align: left"></td>
<td style="text-align: left"></td>
<td style="text-align: center"></td>
<td style="text-align: center"></td>
</tr>
</tbody>
</table> -->

						
					</div>
					

		    		</div>    
		   </div>  		  	
  </div> 
</div>  
</section>













