<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?><?php if(is_single()) { echo ' | ' .  the_title("", "", false); } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Pathway to Recovery">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Serif:400,700,400italic,700italic' />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rdf_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="alternate" type="application/json" href="<?php bloginfo('url'); ?>/?feed=json" />
    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/respond.js"></script>
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lte-ie8.css" />
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container facebook-link">
    <a href="https://www.facebook.com/pages/Pathway-to-Recovery/160535554009736"></a>
  </div>

  <section class="logos">
    <div class="container clearfix">
      <a href="<?php echo bloginfo('wpurl'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" /></a>
      <h1>Sober Living for Homeless Hoosiers</h1>
    </div>  
  </section>

  <section class="navigation">
    <div class="container">
      <nav class="navbar navbar-default navigation-bottom" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#">Pathway to Recovery</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php 
              wp_nav_menu( 
                array(
                  'theme_location' => 'primary',
                  'sort_column'    => 'menu_order', 
                  'container'      => 'ul',
                  'container_class' => '',
                  'menu_class'     => '',
                  'items_wrap'     => '%3$s',
                  'depth'          => 2//,
                  //'walker'         => new JC_Submenu_Nav_Walker()
                )
              );
              ?>
            </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    </div>
  </section>