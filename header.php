<?php
 /**
  * The header for our theme
  *
  * This is the template that displays all of the <head> section and everything up until <div id="content">
  *
  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
  *
  * @package cyberize-app-dev
  */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>
  <div class="site">
    <a class="skip-link screen-reader-text"
      href="#primary"><?php esc_html_e('Skip to content', 'cyberize-app-dev');?></a>

    <header id="" class="site-header">
      <!-- Moose_Framework_2 NAVIGATION GOES HERE -->

      <div class="main-navigation">
        <div class="main-navbar container-fluid">

          <?php
           wp_nav_menu(array(
            'theme_location'  => 'menu-1', // Defined when registering the menu
            'menu_id'         => 'primary-menu',
            'container'       => 'div',
            'container_class' => 'main-nav',
            // 'menu_class'     => 'mx-auto', //CENTER ALIGN
            'menu_class'      => 'ml-auto' //RIGHT ALIGN
            // 'menu_class'     => 'mr-auto', //LEFT ALIGN
           ));
          ?>

        </div>
      </div>


      <!-- Moose_Framework_2 NAVIGATION ENDS HERE -->

    </header><!-- #masthead -->

    <!-- SELFLIST LOGO HEADER -->
    <!-- <header id="header-list-preview" class="site-header container mt-5 mb-2 text-center">

      <figure class="logo-container">


        <img class="mx-auto d-block w-25 mt-4" src="/wp-content/uploads/2020/07/SelfListLogo.png" alt="">

      </figure>

    </header> -->
    <!-- #masthead -->
    <hr class="bg-danger">