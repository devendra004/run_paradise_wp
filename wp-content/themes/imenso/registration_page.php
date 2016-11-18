<?php
/* Template Name: registration_page */
get_header();
if (have_posts()):
while (have_posts()):
the_post();

get_template_part('common_banner_count');
get_template_part('registration_page', 'race_info');
get_template_part('registration_page', 'race_detail');
get_template_part('registration_page', 'trophy');



endwhile;
endif;
get_footer();
?>
