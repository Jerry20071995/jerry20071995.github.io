<?php 
  /* Template Name: single-project */
  get_header(); 
?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Single project</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <a href="#">Blog</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Page</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Banner -->
      
      <!-- Start Content -->
      <div id="content">
        <div class="container">
          <div class="row">
            <!-- Start Single Project Slider -->
            <div class="single-gallery col-md-8">
              <div class="touch-slider owl-carousel" data-slider-pagination="true">
                <div class="item">
                  <a class="lightbox" title="This is an image title" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1-large.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen"></i></div>
                  </a>
                </div>
                <div class="item">
                  <a class="lightbox" title="This is an image title" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen"></i></div>
                  </a>
                </div>
                <div class="item">
                  <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen "></i></div>
                  </a>
                </div>
              </div>                
            </div>
            <!-- End Single Project Slider -->

            <!-- Start Project Content -->
            <div class="project-content col-md-4">
              <h5 class="widget-title">Project Description</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed facilisis purus. Donec interdum massa at ipsum vehicula tristique. Maecenas bibendum dictum tincidunt. Sed nec justo ac libero consequat tincidunt. Cras eget molestie justo.</p>
              <h5 class="widget-title">Project Details</h5>
              <ul>
                <li><strong>Client:</strong> Graygrids</li>
                <li><strong>Status:</strong> Finish on 30 jun, 2015</li>
                <li><strong>Skills:</strong> creative, web design</li>
              </ul>
              <div class="share">
                <div class="social-link"> 
                  <span>Share This article</span>   
                  <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                  <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                  <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
            <!-- End Project Content -->
          </div>
          <!-- Start Portfolio Section -->
          <div class="project">
            <div class="container">
              <div class="row">
                <!-- Start Recent Projects Carousel -->
                <div class="recent-projects">
                  <h4 class="title"><span>Recent Projects</span></h4>
                  <div id="projects-carousel" class="touch-carousel">
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-01.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-01.jpg" class="lightbox"><i class="more fa fa-search"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-02.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-02.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-03.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-03.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-04.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-04.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-05.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-05.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-06.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-06.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-07.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-07.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-08.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-08.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-09.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-09.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-10.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-10.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-11.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-11.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item item">
                      <div class="portfolio-border">
                        <div class="portfolio-img">
                          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-12.jpg" />
                          <div class="overlay">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-12.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                          </div>
                        </div>
                        <div class="portfolio-details">
                          <a href="#">
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Website Drawing</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Recent Projects Carousel -->
              </div>
            </div>
            <!-- .container -->
          </div>
          <!-- End Portfolio Section -->
        </div>
      </div>
      <!-- End Content -->
<?php get_footer(); ?>