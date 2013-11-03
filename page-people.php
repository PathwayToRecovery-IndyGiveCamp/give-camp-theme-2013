<?php
/*
Template Name: People Template
*/

get_header();

  while ( have_posts() ) { 
    the_post();
    get_template_part( 'content', 'people' );

   } // end of the loop

get_footer();