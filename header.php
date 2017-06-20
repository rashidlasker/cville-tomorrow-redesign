<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cville-tomorrow-theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Noto+Sans" rel="stylesheet">

<?php wp_head(); ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>

    <script> // v3.1.0
        //Docs at http://simpleweatherjs.com
        $(document).ready(function() {
          $.simpleWeather({
            location: 'Charlottesville, VA',
            woeid: '',
            unit: 'f',
            success: function(weather) {
              html = '<h3><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h3>';
              $("#weather").html(html);
            },
            error: function(error) {
              $("#weather").html('<p>'+error+'</p>');
            }
          });
        }); 
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cville-tomorrow-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        
<!-- start desktop nav -->	
        <div class="banner"></div>
        <div class="top-nav">
            <div class="left-container">
                <h3 class="search"> SEARCH </h3>
                
            </div>
            
            <div class="right-container">
            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'SUB',
				) );
			?> 
        </div>
        </div>
        <div class="logo">
            <img src="<?php echo bloginfo('template_url'); ?>/images/newlogo.png">
        </div>
        <div class="top-bar">
            <h3 class = "date"><?php echo date('l,  F jS, Y'); ?> </h3> 
            <h3>&nbsp&nbsp|&nbsp&nbsp</h3>
            <div id="weather"></div>
            <h3>&nbsp&nbsp|&nbsp&nbsp</h3>
            <button class="sub-button">SUBSCRIBE</button>
            
        </div>

        <div class="bottom-bar">
            <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cville-tomorrow-theme' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
            </nav><!-- #site-navigation -->
        </div>      
<!-- end desktop nav -->
        
<!-- start mobile nav -->	
        

<!-- end mobile nav -->
              
	</header><!-- #masthead -->

	<div id="content" class="site-content">
