<?php 
  /* Template Name: left-sidebar */
  get_header(); 
?>

      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Left Sidebar</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Left Sidebar</span>
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
          
            <!--Sidebar-->
            <aside id="sidebar" class="col-md-3 right-sidebar">
              <!-- Search Widget -->
              <div class="widget widget-search">
                <h5 class="widget-title">Search</h5>
                <form action="#">
                  <input class="form-control" type="search" placeholder="Start Searching..." />
                  <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>

              <!-- Categories Widget -->
              <div class="widget widget-categories">
                <h5 class="widget-title">Categories</h5>
                <ul class="cat-list">
                  <li>
                    <a href="#">News</a>
                    <span class="num-posts">50</span>
                  </li>
                  <li>
                    <a href="#">Design</a>
                    <span class="num-posts">22</span>
                  </li>
                  <li>
                    <a href="#">Development</a>
                    <span class="num-posts">18</span>
                  </li>
                  <li>
                    <a href="#">Graphic</a>
                    <span class="num-posts">12</span>
                  </li>
                  <li>
                    <a href="#">HTML5 & CSS3</a>
                    <span class="num-posts">128</span>
                  </li>
                  <li>
                    <a href="#">Wordpress</a>
                    <span class="num-posts">7</span>
                  </li>
                  <li>
                    <a href="#">Joomla</a>
                    <span class="num-posts">6</span>
                  </li>
                  <li>
                    <a href="#">Tutorial</a>
                    <span class="num-posts">23</span>
                  </li>
                </ul>
              </div>

              <!-- Popular Posts widget -->
              <div class="widget widget-popular-posts">
              <h5 class="widget-title">Popular Post</h5>
                <ul class="posts-list">
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb1.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/05/21</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/03/28</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/02/18</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb4.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/02/13</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb5.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/01/15</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>

              <!-- Social Media -->
              <div class="widget widget-social">
                <h5 class="widget-title">Social Media</h5>
                <div class="social-link">    
                  <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>

              <!-- Tag Media -->
              <div class="widget tag">
                <h5 class="widget-title">Tag Cloud</h5>
                <a href="#"><i class="fa fa-tag"></i> Responsive</a>
                <a href="#"><i class="fa fa-tag"></i>   HTML5</a>
                <a href="#"><i class="fa fa-tag"></i>  Design</a>
                <a href="#"><i class="fa fa-tag"></i> CSS3</a>                  
                <a href="#"><i class="fa fa-tag"></i> Graphic</a>
                <a href="#"><i class="fa fa-tag"></i> Creative</a>
              </div>

              <!-- Posts slider Widget -->
              <div class="widget">
                <h5 class="widget-title">Related Posts</h5>
                <div class="relate-slider owl-carousel owl-theme">
                  <div class="portfolio-item item">
                    <div class="portfolio-img">
                      <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1.jpg" />
                      <div class="overlay">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-01.jpg" class="lightbox"><i class="more fa fa-search"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-details">
                      <a href="#">
                        <h4>Train Your Self</h4>
                      </a>
                      <span>2015/04/15</span>
                    </div>
                  </div>
                  <div class="portfolio-item item">
                    <div class="portfolio-img">
                      <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2.jpg" />
                      <div class="overlay">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                      </div>
                    </div>
                    <div class="portfolio-details">
                      <a href="#">
                        <h4>Train Your Self</h4>
                      </a>
                      <span>2015/02/13</span>
                    </div>
                  </div>
                  <div class="portfolio-item item">
                    <div class="portfolio-img">
                      <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3.jpg" />
                      <div class="overlay">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
                      </div>
                    </div>
                    <div class="portfolio-details">
                      <a href="#">
                        <h4>Train Your Self</h4>
                      </a>
                      <span>2015/05/21</span>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!--End sidebar-->

            <!-- Page Content -->
            <div class="col-md-9 page-content">
              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Page With Right Sidebar</span></h4>
              <!-- Some Text -->
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
              <!-- Divider -->
              <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div>
              <!-- Accordion -->
              <div class="panel-group" id="accordion">
                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                      <i class="fa fa-angle-up control-icon">
                      </i>
                      <i class="fa fa-desktop">
                      </i>
                      Fully Responsive Theme
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                      <strong>
                      printer
                      </strong>
                      took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </div>
                  </div>
                </div>
                <!-- End Accordion 1 -->
                <!-- Start Accordion 2 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                      <i class="fa fa-angle-up control-icon">
                      </i>
                      <i class="fa fa-gift">
                      </i>
                      Touchable Slider
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a 
                      <strong>
                      more-or-less
                      </strong>
                      normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                  </div>
                </div>
                <!-- End Accordion 2 -->
                <!-- Start Accordion 3 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">
                      <i class="fa fa-angle-up control-icon">
                      </i>
                      <i class="fa fa-tint">
                      </i>
                      Retina Ready
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-3" class="panel-collapse collapse">
                    <div class="panel-body">
                      Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                  </div>
                </div>
                <!-- End Accordion 3 -->
                <!-- Start Accordion 4 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4" class="collapsed">
                      <i class="fa fa-angle-up control-icon">
                      </i>
                      <i class="fa fa-fire">
                      </i>
                      Our Solution
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-4" class="panel-collapse collapse">
                    <div class="panel-body">
                      Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
                    </div>
                  </div>
                </div>
                <!-- End Accordion 4 -->
              </div>
              <!-- End Accordion -->
            </div>
            <!-- End Page Content-->
          </div>
        </div>
      </div>
      <!-- End Content -->
<?php get_footer(); ?>