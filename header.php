<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head  class="no-js">
    
    <meta charset="<?php bloginfo('charset'); ?>">
    
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css"/>

    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       
          <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" /> 


    <!-- FAVICON -->

    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    

</head>
 <body <?php body_class(); ?>>

 <header class="navbar-top clearfix">
 	
<div  class="container clearfix nav-holder">
                
                    
                
                    <div class="navbar-header">
                        <a href="<?php bloginfo('url'); ?>" class="navbar-brand">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" />
                            <span class="logo-text">
								<span>TOOTOON</span><br /><span class="hidden-lg hidden-md">TOBACCO</span>
                            </span>

                         </a>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                            <span class="sr-only">Toggle Navigation</span>

                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                    </div>
               
				<?php 
					
					$main_nav_args = array (
						
							'theme_location' 	=> 'main-menu',
							'container'			=> 'nav',
							'container_class' 	=> 'top-menu collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav navbar-left clearfix ',
						
					);
					
					wp_nav_menu($main_nav_args); 
				?>
            </div>
 </header>