

<section class="race_detail comm_pad gray_back">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel with-nav-tabs panel-default">

                    
                            <?php
                                    global $wp_query;
                                    global $query_string;
                                    $args = array('post_type' => 'race_info',
                                      'posts_per_page' => 24,
                                      'order' => 'ASC',
                                      );
                                    query_posts( $args );
                                    $count = 1; $active = 'active';
                                    ?>

                                    <?php if ( have_posts() ) : ?>
                                     <div class="row margin_0 panel_head">
                                        <ul class="nav nav-tabs col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">   
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <li class='<?php if($count == 2 ){echo 'active';} ?>'><a href="#tab1default<?php echo $count; ?>" data-toggle="tab"><?php the_title(); ?></a></li>
                                            <?php  $active = ''; $count++; endwhile; ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                    <?php wp_reset_query(); ?>

                                    <?php $args = array('post_type' => 'race_info',
                                      'posts_per_page' => 24,
                                      'order' => 'ASC',
                                      );
                                    query_posts( $args );
                                    $count = 1;
                                    $active = 'in active';
                                    ?>
                                    <?php if ( have_posts() ) : ?>    
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                
                                            <div class="tab-pane fade <?php if($count == 2 ){echo 'in active';} ?> " id="tab1default<?php echo $count; ?>"> 
                                                
                                                    <?php the_content(); ?>
                                               
                                            </div>
                                            <?php $active = ''; $count++; endwhile; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php wp_reset_query(); ?>

              



                      
                    </div>
                </div>
            </div>
        </div>
</section>
