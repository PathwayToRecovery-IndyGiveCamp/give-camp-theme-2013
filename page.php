<?php
// Default page template

get_header();

  while ( have_posts() ) { 
    the_post();
    get_template_part( 'content', 'page' );
   } // end of the loop

get_footer();