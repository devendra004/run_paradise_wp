<?php
/* Template Name: race_info */
get_header();
if (have_posts()):
while (have_posts()):
the_post();

get_template_part('common_banner');
get_template_part('race_page', 'detail');
get_template_part('race_page', 'detail_points');


endwhile;
endif;
get_footer();
?>
