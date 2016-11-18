<?php
/* Template Name: accommodation page */
get_header();
if (have_posts()):
while (have_posts()):
the_post();

get_template_part('common_banner');
get_template_part('accommodation_page', 'hotels');

endwhile;
endif;
get_footer();
?>
