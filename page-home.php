<?php
/*
Template Name: Home Page Template
*/

get_header();

  while ( have_posts() ) { 
    the_post();
    get_template_part( 'content', 'home' );

   } // end of the loop

get_footer();