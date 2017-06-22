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
              $(".weather").html(html);
            },
            error: function(error) {
              $(".weather").html('<p>'+error+'</p>');
            }
          });

          $('.hamburger-menu').on('click', function() {
                $('.bar').toggleClass('animate');
                $('.menu-mobile-menu-container').fadeToggle('fast');
            })
        }); 
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cville-tomorrow-theme' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        
<!-- start desktop nav -->
        <div class="desk-nav">
            <div class="banner"></div>
            <div class="top-nav">
                <div class="nav-left-container">
                    <!-- <h3 class="nav-search"><img src=""> SEARCH </h3> -->
                    <section id="search-2" class="widget widget_search">
                        <form role="search" method="get" class="search-form" action="http://localhost/cville-tomorrow-redesign/">
                            <input type="submit" class="search-submit nav-submit" value="" style="background:url(<?php echo bloginfo('template_url'); ?>/images/magnifying-glass-navy.png);"/>
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field nav-search-label" placeholder="" value="" name="s" />
                            </label>
                            
                        </form>
                    </section>
                </div><div class="nav-right-container">
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
                <h3 class = "nav-date"><?php echo date('l,  F jS, Y'); ?> </h3> 
                <h3>&nbsp&nbsp|&nbsp&nbsp</h3>
                <div class="weather"></div>
                <h3>&nbsp&nbsp|&nbsp&nbsp</h3>
                <button class="sub-button">SUBSCRIBE</button>
                
            </div>

            <div class="bottom-bar">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
                </nav><!-- #site-navigation -->
            </div>      
        </div>
<!-- end desktop nav -->
<!-- start mobile nav -->   
        <div class="mobile-nav">
            <div class="weather">
            </div><div class="logo">
                <img src="<?php echo bloginfo('template_url'); ?>/images/newlogo.png">
            </div><section id="search-2" class="widget widget_search">
                <form role="search" method="get" class="search-form" action="http://localhost/cville-tomorrow-redesign/">
                    <input type="submit" class="search-submit nav-submit" value="" style="background:url(<?php echo bloginfo('template_url'); ?>/images/magnifying-glass-navy.png);"/>
                </form>
            </section><div class="hamburger">
                <div class="hamburger-menu">
                    <div class="bar"></div>   
                </div>
            </div>
        </div>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-3',
                'menu_id'        => 'mobile',
            ) );
        ?>
<!-- end mobile nav -->
              
    </header><!-- #masthead -->

    <div id="content" class="site-content">
