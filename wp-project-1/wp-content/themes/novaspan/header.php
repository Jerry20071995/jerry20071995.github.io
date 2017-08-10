<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
  <head>
    <!-- Basic -->
    <title>
      Span | The Multi-Purpose HTML5 Template
    </title>
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Page Description and Author -->
    <meta name="description" content="Span - Responsive HTML5 Template">
    <meta name="author" content="Grayrids">
    
    
    <?php wp_head(); ?>
    <!--[if IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Full Body Container -->
    <div id="container">
      <!-- Start Header Section -->
      <div class="hidden-header">
      </div>
      <header class="clearfix">
        <!-- Start Top Bar -->
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-sm-9">
                <!-- Start Contact Info -->
                <ul class="contact-details">
                  <li>
                    <a href="#">
                    <i class="icon-pointer">
                    </i>
                    New South wales, Sydaney
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <i class="icon-call-out">
                    </i>
                    Call Us: (123) 456- 789
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <i class="icon-envelope">
                    </i>
                    Email@example.com
                    </a>
                  </li>
                </ul>
                <!-- End Contact Info -->
              </div>
              <div class="col-md-5 col-sm-3">
                <!-- Start Social Links -->
                <ul class="social-list">
                  <li>
                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#">
                    <i class="fa fa-facebook">
                    </i>
                    </a>
                  </li>
                  <li>
                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#">
                    <i class="fa fa-twitter">
                    </i>
                    </a>
                  </li>
                  <li>
                    <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#">
                    <i class="fa fa-google-plus">
                    </i>
                    </a>
                  </li>
                  <li>
                    <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#">
                    <i class="fa fa-dribbble">
                    </i>
                    </a>
                  </li>
                  <li>
                    <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#">
                    <i class="fa fa-linkedin">
                    </i>
                    </a>
                  </li>
                </ul>
                <!-- End Social Links -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Top Bar -->
        <!-- Start  Logo & Naviagtion  -->
        <div class="navbar navbar-default navbar-top">
          <div class="container">
            <div class="navbar-header">
              <!-- Stat Toggle Nav Link For Mobiles -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars">
              </i>
              </button>
              <!-- End Toggle Nav Link For Mobiles -->
              <a class="navbar-brand" href="/">
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
              </a>
            </div>
            <div class="navbar-collapse collapse">
              <!-- Stat Search -->
              <div class="search-side">
                <a class="show-search">
                <i class="fa fa-search"></i>
                </a>
              </div>
              <!-- Form for navbar search area -->
              <form class="full-search">
                <div class="container">
                  <div class="row">
                    <input class="form-control" type="text" placeholder="Type to Search">
                    <a class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                    </a>
                  </div>
                </div>
              </form>
              <!-- Search form ends -->
              <!-- Start Navigation List -->

              <?php

                wp_nav_menu( array(
                  'theme_location' => 'main_menu',
                  'container' => false,
                  'menu_class' => 'nav navbar-nav navbar-right',
                ) );

               

              ?>

            </div>
          </div>

          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a class="active" href="index.html">
              Home
              </a>
              <ul class="dropdown">
                <li>
                  <a class="active" href="index.html">
                  Home Main Version
                  </a>
                </li>
                <li>
                  <a href="index-01.html">
                  Home Version 1
                  </a>
                </li>
                <li>
                  <a href="index-02.html">
                  Home Version 2
                  </a>
                </li>
                <li>
                  <a href="index-03.html">
                  Home Version 3
                  </a>
                </li>
                <li>
                  <a href="index-04.html">
                  Home Version 4
                  </a>
                </li>
                <li>
                  <a href="index-05.html">
                  Home Version 5
                  </a>
                </li>
                <li>
                  <a href="index-06.html">
                  Home Version 6
                  </a>
                </li>
                <li>
                  <a href="index-07.html">
                  Home Version 7
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="about.html">
              Pages
              </a>
              <ul class="dropdown">
                <li>
                  <a href="about.html">
                  About
                  </a>
                </li>
                <li>
                  <a href="services.html">
                  Services
                  </a>
                </li>
                <li>
                  <a href="team.html">
                  Team Members
                  </a>
                </li>
                <li>
                  <a href="right-sidebar.html">
                  Right Sidebar
                  </a>
                </li>
                <li>
                  <a href="left-sidebar.html">
                  Left Sidebar
                  </a>
                </li>
                <li>
                  <a href="faq.html">
                  FAQ Page
                  </a>
                </li>
                <li>
                  <a href="404.html">
                  404 Page
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
              Shortcodes
              </a>
              <ul class="dropdown">
                <li>
                  <a href="tabs.html">
                  Tabs
                  </a>
                </li>
                <li>
                  <a href="buttons.html">
                  Buttons
                  </a>
                </li>
                <li>
                  <a href="action-box.html">
                  Action Box
                  </a>
                </li>
                <li>
                  <a href="testimonials.html">
                  Testimonials
                  </a>
                </li>
                <li>
                  <a href="latest-posts.html">
                  Latest Posts
                  </a>
                </li>
                <li>
                  <a href="latest-projects.html">
                  Latest Projects
                  </a>
                </li>
                <li>
                  <a href="pricing.html">
                  Pricing Tables
                  </a>
                </li>
                <li>
                  <a href="accordion-toggles.html">
                  Accordion & Toggles
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="portfolio-3.html">
              Portfolio
              </a>
              <ul class="dropdown">
                <li>
                  <a href="portfolio-2.html">
                  2 Columns
                  </a>
                </li>
                <li>
                  <a href="portfolio-3.html">
                  3 Columns
                  </a>
                </li>
                <li>
                  <a href="portfolio-4.html">
                  4 Columns
                  </a>
                </li>
                <li>
                  <a href="single-project.html">
                  Single Project
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="blog.html">
              Blog
              </a>
              <ul class="dropdown">
                <li>
                  <a href="blog.html">
                  Blog - right Sidebar
                  </a>
                </li>
                <li>
                  <a href="blog-left-sidebar.html">
                  Blog - Left Sidebar
                  </a>
                </li>
                <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                <li>
                  <a href="bog-full-width.php">
                  Blog Single Post
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contact.html">
              Contact
              </a>
            </li>
          </ul>
          <!-- Mobile Menu End -->

        </div>
        <!-- End Header Logo & Naviagtion -->
      </header>