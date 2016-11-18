<?php
/* Template Name: result page */
get_header();
if (have_posts()):
while (have_posts()):
the_post();

get_template_part('common_banner');
get_template_part('result_page', 'results');


endwhile;
endif;
get_footer();
?>
