<?php $imenso_theme_options = imenso_theme_options();
$col = 12 / (int)$imenso_theme_options['footer_layout']; ?>
<!-- footer -->
<footer id="footer" >
    <div class="container-fluid  row_spacer clearfix">
        <div class="rows clearfix footer_row_flex">
            <?php if (is_active_sidebar('footer-widget')) {
                dynamic_sidebar('footer-widget');
            } else {
                $args = array(
                    'before_widget' => '<div class="footer-widget-col 	col-md-' . $col . '"><div class="footer_row">',
                    'after_widget' => '</div></div>',
                    'before_title' => '<h6 class="footer_title">',
                    'after_title' => '</h6>',
                );
                the_widget('WP_Widget_Tag_Cloud', null, $args);
                the_widget('WP_Widget_Meta', null, $args);
                the_widget('imenso_footer_recent_posts', null, $args);
                the_widget('imenso_footer_contact_widget', null, $args);
            } ?>
        </div>
    </div>

</footer>
<!-- End footer -->
<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->
<?php wp_footer();
if($imenso_theme_options['custom_css']!=""){
    echo '<style>'.$imenso_theme_options['custom_css'].'</style>';
}
?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.downCount.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mixitup.min.js"></script>

<script type="text/javascript">
/*jQuery(document).ready(function() {

  jQuery('.countdown').downCount({
   date: '06/03/2017 12:00:00',
    offset: +1
  });
});*/
jQuery(window).load(function() {


jQuery(".loader_new").fadeOut("slow");

if(jQuery('.race_video').length>0){

    jQuery(".sponser").css("padding-top", "180px");

}
else{
     jQuery(".sponser").css("padding-top", "50px");
}

      if(jQuery(".banner_common_contain").children("h3").html()=="Registration" || "Course" || "Sponsors") 

      {
        jQuery(".banner_common_contain").find("h3").css("font-family","inherit");
      }  

});

</script>


</body>
</html>
