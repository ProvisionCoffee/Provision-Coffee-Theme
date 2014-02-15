<<<<<<< HEAD
<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- Load Stylesheet -->
		<link href="../wp-content/themes/provision/library/css/custom.css" rel="stylesheet">
		<link href="../wp-content/themes/provision/library/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		
				
	</head>
					
		<body <?php body_class(); ?>>
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Provision Coffee</title>

    <!-- Bootstrap core CSS -->
    <link href="/wp-content/themes/Provision-Coffee-Theme/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/wp-content/themes/Provision-Coffee-Theme/css/custom.css" rel="stylesheet">
    <link href="/wp-content/themes/Provision-Coffee-Theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
  <!-- Navbar -->
  <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"></a>
        </div>
<<<<<<< HEAD
        <div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>	
					</div><!-- /nav-collapse -->
      </div><!-- /container -->
    </div>
    <!-- /navbar -->
=======
        <div class="collapse navbar-collapse">
            <?php 
              $attr = array(
                'theme_location'  => 'primary',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
              );
              wp_nav_menu($attr); 
            ?>
<!--           <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="../story.html">Our Story</a></li>
            <li><a href="../coffees.html">Our Coffees</a></li>
            <li><a href="../subscribe.html">Subscribe</a></li>
            <li><a href="../blog.html">Blog</a></li>
            <li><a href="../contact.html">Contact</a></li>
          </ul>
 -->        </div><!-- /nav-collapse -->
      </div><!-- /container -->
    </div>
    <!-- /navbar -->
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Make Memories</h1>
        <h3>Share Provision</h3>
        <a href="#about" id="vert-btn" class="btn btn-default btn-lg">Browse Coffees</a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
>>>>>>> bf57d3846f304426099c232fc5108b29f523dfce
