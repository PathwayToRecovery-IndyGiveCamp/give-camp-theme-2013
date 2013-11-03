<section class="home-content-top">
	<div class="container">
		<div class="row top-headline">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php the_block('Home Page Video/Image') ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php the_block('Home Page Headline') ?>
			</div>
		</div>
	</div>
</section>

<section class="home-content-bottom-container">
	<section class="home-content-bottom">
		<div class="container">
			<div class="row site-home-big-links">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 individual-box">
					<?php the_block('Middle Content - Left') ?>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 individual-box">
					<?php the_block('Middle Content - Middle') ?>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 individual-box">
					<?php the_block('Middle Content - Right') ?>
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
				</div>
			</div>
		</div>
	</section>
</section>