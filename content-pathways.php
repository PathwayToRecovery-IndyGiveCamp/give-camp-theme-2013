<section class="page-content-bottom-container">
	<section class="home-content-bottom page-content-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar-content-area">
					<h3>Pathways</h3>
					<ul>
					<?php 
						wp_nav_menu( 
							array(
								'theme_location' => 'locations',
								'sort_column'    => 'menu_order', 
								'container'      => 'ul', // actuall removed the container. weird right?
								'container_class' => '',
								'menu_class'     => '',
								'items_wrap'     => '%3$s',
								'depth'          => 2//,
								//'walker'         => new JC_Submenu_Nav_Walker()
							)
						);
					?>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
</section>