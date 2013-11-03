<section class="home-content-top">
	<div class="container">
		<div class="row top-headline">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php the_block('Home Page Video/Image') ?>
				<!--img src="http://placehold.it/600x300" width="600" height="300" class="img-responsive" /-->
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php the_block('Home Page Headline') ?>
				<!--h1>2013 Pathway Recovery Roundup</h1>
				<p>Fake text will go here. We'll decide what text goes where when we start transferring content</p>
				<a href="#" class="link">Learn How You Can Help</a-->
			</div>
		</div>
	</div>
</section>

<section class="home-content-bottom-container">
	<section class="home-content-bottom">
		<div class="container">
			<div class="row site-home-big-links">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 individual-box">
					<img src="<?php bloginfo('template_directory'); ?>/img/sample-image.jpg" />
					<?php the_block('Middle Content - Left') ?>
					<!--h3>Donate</h3>
					<p>Filler text will go here</p>
					<a href="#">Link to content</a-->
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 individual-box">
					<img src="<?php bloginfo('template_directory'); ?>/img/sample-image.jpg" />
					<?php the_block('Middle Content - Middle') ?>
					<!--h3>Volunteer</h3>
					<p>Filler text will go here</p>
					<a href="#">Link to content</a!-->
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 individual-box">
					<img src="<?php bloginfo('template_directory'); ?>/img/sample-image.jpg" />
					<?php the_block('Middle Content - Right') ?>
					<!--h3>Apply</h3>
					<p>Filler text will go here</p>
					<a href="#">Link to content</a-->
				</div>
			</div>
			<div class="row hr-rule-shadow">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/hr-shadow.png" />
				</div>
			</div>
			<div class="row last">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 home-bottom-sub-area clearfix">
					<h3>Recent News</h3>
					<div id="newsResults"></div>
					<p>More text that we need to decide about. And I need to make this longer to see how big the div really is. Kinda small haha</p>
					<a href="#">News</a>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 home-bottom-sub-area clearfix">
					<?php the_block('Alumni Spotlight') ?>
					<!--h3>Alumni Spotlight</h3>
					<p>More text that we need to decide about. And I need to make this longer to see how big the div really is. Kinda small haha</p>
					<a href="#">Learn More</a--->
				</div>
			</div>
		</div>
	</section>
</section>