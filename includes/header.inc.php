<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }?> 
 <!doctype html>

<!--
=============================================
  Developed by Code Cobber for your enjoyment
  http://www.codecobber.co.uk
  Free for personal and commercial use under the CCA 4.0 license:  (see www.codecobber.co.uk/license)
=============================================
-->

<html class="no-js" lang="en">

  <head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php get_page_clean_title(); ?> &mdash;  <?php get_site_name(); ?></title> 
  <?php get_header(); ?>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/effects.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/push.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/app.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/myCss.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/rowData.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/lightbox.min.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/cssFonts.css" />


    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    

    <!-- Javascript -->
    <script src="<?php get_theme_url(); ?>/js/vendor/jquery.js"></script>
    <script id="scrollCheck" src="<?php get_theme_url(); ?>/js/scrollCheck.js"></script>


    <!-- Google Analytics below -->
    <link rel="canonical" href="http://www.yoursite.co.uk/" >


    <!-- Facebook og settings -->
    <meta property="og:title" content="title" />
    <meta property="og:url" content="http://www.yoursite.co.uk" />
    <meta property="og:image" content="http://www.yoursite.co.uk/images/logo.png" />
    <meta property="og:type" content="company" />



    <!-- twitter code below -->



  </head>
  <body id="<?php get_page_slug(); ?>">


<!-- SideNav content -->

      
      <div id="mySidenav" class="sidenav">
        <ul>
          <li class="sideTitle"><?php get_site_name(); ?></li>
          <?php get_navigation(return_page_slug()); ?>
        </ul>
      </div>

      <div id="main" class="hide-for-medium">
            <span style="cursor:pointer" onclick="openNav()">&#9776; Menu</span>
      </div>

<!-- ==================================================================================== -->


     
        <!-- Page content -->
        <!-- show for small -->
   

        <div id="greyTB" class="show-for-medium">
        <div class="row column">
          <div id="widemenu" class="top-bar">
            <div class="menu-centered show-for-medium" id="topNav">
              <ul class="menu"><?php get_navigation(return_page_slug()); ?></ul>
            </div>
            </div>
          </div>
      </div>
