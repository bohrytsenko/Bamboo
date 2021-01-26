<?php
   /**
    * The template for displaying the header
    *
    *
    * @package Bamboo
    * @subpackage Bamboo
    * @since Bamboo 2021
    */
   
   ?>
<!DOCTYPE html>
<html>
   <head lang="en">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <meta name="theme-color" content="#fff">
      <title><?php if (is_front_page()){bloginfo('name'); } else{wp_title(''); } ?></title>
      <!--Fonts-->

      <!-- Styles -->
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_comp/swiper/dist/css/swiper.css" />
      <?php wp_head(); ?>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
   </head>
   <body>

<!--begin header-->
<header class="header">
    <div class="container">
        <div class="navigation">
          <div class="logo">
            <a href="/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Logo" />
            </a>
          </div>
          <div class="nav_menu">
                <div class="nav_menu-left">
                    <ul>
                        <li><a href="#">Why bamboo</a></li>
                        <li><a href="#">Suites</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div class="nav_menu-right">
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Sign in</a></li>
                    </ul>
                </div>
          </div>
          <a href="#" class="btn-green">Try for free</a>
          <a href="#/" class="burger">
            <img src="http://bamboo.hrytsenko.site/wp-content/uploads/2021/01/mob_menu.svg" alt="">
          </a>
        </div>
    </div>
</header>
<!--end header-->