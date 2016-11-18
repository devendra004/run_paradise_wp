<!doctype html>
<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $imenso_theme_options = imenso_theme_options(); ?>
    <?php wp_head(); ?>


</head>
<?php $class = "";
if ($imenso_theme_options['site_layout'] != "") {
    $class = 'site_boxed ';
}
$class .= isset($imenso_theme_options['headercolorscheme']) ? $imenso_theme_options['headercolorscheme'] : ''; ?>
<body <?php body_class("menu_button_mode preloader3 menu_button_mode " . $class); ?>>
<span id="stickymenu"
      style="display:none;"><?php echo isset($imenso_theme_options['headersticky']) ? esc_attr($imenso_theme_options['headersticky']) : 1 ; ?></span>

<div id="preloader">
    <div class="spinner">
        <div class="sk-dot1"></div>
        <div class="sk-dot2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<div id="main_wrapper">
    <header id="site_header">
        <div class="topbar <?php echo esc_attr($imenso_theme_options['topbarcolor']); ?>">
            <!-- class ( topbar_colored  ) -->
            <div class="content clearfix">
                <?php if ($imenso_theme_options['contact_info_header']) { ?>
                <div class="top_details clearfix f_left"><?php
                    if ($imenso_theme_options['contact_phone']) {
                        ?>
                        <span><i class="fa fa-phone"></i><span
                            class="title"><?php _e('Call Us :', 'imenso') ?></span><a href="tel:<?php echo esc_attr($imenso_theme_options['contact_phone']); ?>"><?php echo esc_attr($imenso_theme_options['contact_phone']); ?></a>
                        </span><?php
                    }
                    if ($imenso_theme_options['contact_email']) {
                        ?>
                        <span><i class="fa fa-envelope-o"></i><span
                                class="title"><?php _e('Email :', 'imenso') ?></span>
                            <a href="mailto:<?php echo sanitize_email($imenso_theme_options['contact_email']); ?>"><?php echo sanitize_email($imenso_theme_options['contact_email']); ?></a></span>
                    <?php } ?>
                </div>
                <?php } if ($imenso_theme_options['social_media_header']) { ?>
                    <div class="top-socials box_socials f_right">
                    <?php if ($imenso_theme_options['social_facebook_link'] != '') { ?>
                    <a href="<?php echo esc_url($imenso_theme_options['social_facebook_link']); ?>" target="_blank">
                     <!--   <span class="soc_name"><?php _e('', 'imenso'); ?></span>  Facebook  -->
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-facebook"></i>
                        </a><?php
                    }
                    if ($imenso_theme_options['social_twitter_link'] != '') {
                        ?>
                    <a href="<?php echo esc_url($imenso_theme_options['social_twitter_link']); ?>" target="_blank">
                     <!--   <span class="soc_name"><?php _e('', 'imenso'); ?></span> Twitter -->
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-twitter"></i>
                        </a><?php
                    } 

                    if ($imenso_theme_options['social_instagram_link'] != '') {
                        ?>
                    <a href="<?php echo esc_url($imenso_theme_options['social_instagram_link']); ?>" target="_blank">
                     <!--   <span class="soc_name"><?php _e('instagram', 'imenso'); ?></span>  -->
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-instagram"></i>
                        </a><?php
                    }

                    if ($imenso_theme_options['social_google_plus_link'] != '') {
                        ?>
                    <a href="<?php echo esc_url($imenso_theme_options['social_google_plus_link']); ?>" target="_blank">
                        <span class="soc_name"><?php _e('Google+', 'imenso'); ?></span>
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-google-plus"></i>
                        </a><?php
                    }
                    if ($imenso_theme_options['social_skype_link'] != '') {
                        ?>
                    <a href="skype:<?php echo esc_url($imenso_theme_options['social_skype_link']); ?>">
                        <span class="soc_name"><?php _e('Skype', 'imenso'); ?></span>
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-skype"></i>
                        </a><?php
                    }
                    if ($imenso_theme_options['social_vimeo_link'] != '') {
                        ?>
                    <a href="<?php echo esc_url($imenso_theme_options['social_vimeo_link']); ?>" target="_blank">
                        <span class="soc_name"><?php _e('Vimeo', 'imenso'); ?></span>
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-vimeo-square"></i>
                        </a><?php
                    }
                    if ($imenso_theme_options['social_youtube_link'] != '') {
                        ?>
                    <a href="<?php echo esc_url($imenso_theme_options['social_youtube_link']); ?>" target="_blank">
                   <!--     <span class="soc_name"><?php _e('', 'imenso'
                            ); ?></span> YouTube  -->
                        <span class="soc_icon_bg"></span>
                        <i class="fa fa-youtube"></i>
                        </a><?php
                    } ?>
                    </div><?php
                } ?>
            </div>
            <!-- End content -->
            <span class="top_expande not_expanded">
                <i class="no_exp fa fa-angle-double-down"></i>
                <i class="exp fa fa-angle-double-up"></i>
            </span>
        </div>
        <!-- End topbar -->

<!-- logo_header -->
<div class="content">

  <div class="first_logo col-lg-2 col-xs-3">
    <img src="<?php echo get_option('site_logo_2'); ?>" alt="" />
  </div>
  <div class="second_logo col-lg-8 col-xs-5 second_logo_section">
<a href="http://dev.imenso.co/run_paradise_new">
      <img src="<?php if (get_header_image()) : echo header_image(); endif; ?>" alt="" />
</a>
  </div>
  <div class="third_logo col-lg-2 col-xs-4 margin_t20">
      <img src="<?php echo get_option('site_logo_3'); ?>" alt="" />
  </div>

</div>
<div class="clearfix"></div>

<!-- end logo header -->
        <div id="navigation_bar"
             style="<?php /*if (get_header_image()) : ?> background-image:url('<?php header_image();?>'); <?php endif; */?>">
            <div style="background:#fff;" class="content my_content">

                <nav id="main_nav">
                    <div id="nav_menu">
                        <span class="mobile_menu_trigger">
                            <a href="#" class="nav_trigger"><span></span></a>
                        </span>
                        <?php wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'clearfix horizontal_menu',
                                'menu_id' => 'navy',
                                'fallback_cb' => 'imenso_fallback_page_menu',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                'walker' => new imenso_nav_walker(),
                            )
                        ); ?>
                    </div>
                </nav>
                <!-- End Nav -->

              <!--a class="" href="#">
                <img src="http://dev.pixelspeaks.in/run_paradise/wp-content/uploads/2016/06/sportstats-logo.png" alt=""
                class="result_logo" />
              </a -->

                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="loader_new"></div>

    <!-- End Main Header -->



