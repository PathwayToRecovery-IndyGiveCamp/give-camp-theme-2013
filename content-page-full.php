<?php

get_header();

?>

  <section>
  	<div class="row">
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  			<h1><?php the_title(); ?></h1>
  			<?php the_content(); ?>
  		</div>
  	</div>
  </section>
        
<?php
get_footer();