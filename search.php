<?php

get_header();

?>
  <h4 class="search-label">
    <?php 
    /* Search Count */ 
    $allsearch = &new WP_Query("s=$s&showposts=-1"); 
    $key       = wp_specialchars($s, 1); 
    $count     = $allsearch->post_count; 
    echo '<em>' . $count . '</em> results for: ';
    _e('<span class="search-terms">'); 
    echo $key; 
    _e('</span>'); 
    wp_reset_query(); 
    ?>
  </h4>
  <?php 
  if(have_posts()) { 
    while(have_posts()) { 
      the_post();
      get_template_part('content', 'index');
    } // end while
  ?>
    <div class="page-navigation pagination">
      <?php
      global $wp_query;

      $big = 999999999; // need an unlikely integer

      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '<img src="'.get_template_directory_uri().'/img/prev-page.png" alt="previous page of posts" class="pagination-links" />',
        'next_text' => '<img src="'.get_template_directory_uri().'/img/next-page.png" alt="next page of posts" class="pagination-links" />',
        'type' => 'list'
      ) );

      ?>
    </div>
  <?php
  } else { // else if
  ?>
    <h3 style="color:#666;text-align:center"><?php _e('No posts have what you were searching for. Try again!'); ?></h3> 
    <div class="video-container">  
      <iframe width="620" height="465" src="http://www.youtube.com/embed/oHg5SJYRHA0?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
  <?php
  } // end if
          
get_footer();