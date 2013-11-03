<?php
/*
Template Name: Pathways Template
*/

get_header();

  while ( have_posts() ) { 
    the_post();
    get_template_part( 'content', 'pathways' );

   } // end of the loop

get_footer();