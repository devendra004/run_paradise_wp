<?php
/* Template Name: Home */
get_header();
if (have_posts()):
while (have_posts()):
the_post();

get_template_part('home', 'banner');
get_template_part('home', 'call_to_action');
get_template_part('home', 'information');
//get_template_part('home', 'find_out');
//get_template_part('home', 'our_video');
get_template_part('home', 'our_sponser');
//get_template_part('home', 'live_result');

endwhile;
endif;
get_footer();
?>
