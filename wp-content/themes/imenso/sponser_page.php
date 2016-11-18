<?php
/* Template Name: sponser */
get_header();
if (have_posts()):
while (have_posts()):
the_post();

get_template_part('common_banner');
get_template_part('home', 'our_sponser');

endwhile;
endif;
get_footer();
?>
