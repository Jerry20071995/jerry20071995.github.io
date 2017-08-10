<?php 
  /* Template Name: blog-left */
  get_header(); 
?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Blog</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Blog</span>
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
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb1.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/05/21</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/03/28</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/02/18</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb4.jpg" alt="" /></a>
                    </div>
                    <div class="widget-content">
                      <a href="#">Nanamica Graphic</a>
                      <span>2015/02/13</span>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="widget-thumb">
                      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb5.jpg" alt="" /></a>
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
              <!-- Accordion  -->
              <div class="widget accordion">
                <h5 class="widget-title">Categories</h5>
                <div class="panel-group" id="accordion">
                  <!-- Start Accordion 1 -->
                  <div class="panel panel-default">
                    <!-- Toggle Headin -->
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                      <i class="fa fa-angle-down control-icon"></i>
                      Web Design
                      </a>                        
                    </h4>
                    <!-- Toggle Content -->
                    <div id="collapse-1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <ul class="cat-menu-list">
                          <li><a href="#">News</a></li>
                          <li><a href="#">Media</a></li>
                          <li><a href="#">Sound</a></li>
                          <li><a href="#">Movies</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion 1 -->
                  <!-- Start Accordion 2 -->
                  <div class="panel panel-default">
                    <!-- Toggle Headin -->
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
                      <i class="fa fa-angle-down control-icon"></i>
                      HTML5
                      </a>                        
                    </h4>
                    <!-- Toggle Content -->
                    <div id="collapse-2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="cat-menu-list">
                          <li><a href="#">Videos</a></li>
                          <li><a href="#">HTML5 Tags</a></li>
                          <li><a href="#">CSS3</a></li>
                          <li><a href="#">Tutorial</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion 2 -->
                  <!-- Start Accordion 3 -->
                  <div class="panel panel-default">
                    <!-- Toggle Headin -->
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">
                      <i class="fa fa-angle-down control-icon"></i>
                      Graphic Design
                      </a>                        
                    </h4>
                    <!-- Toggle Content -->
                    <div id="collapse-3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="cat-menu-list">
                          <li><a href="#">News</a></li>
                          <li><a href="#">Media</a></li>
                          <li><a href="#">Sound</a></li>
                          <li><a href="#">Movies</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End Accordion 3 -->
                </div>
              </div>
              <!-- Tabs Widget -->
              <div class="widget">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1" data-toggle="tab">Popular</a></li>
                  <li><a href="#tab2" data-toggle="tab">Recent</a></li>
                </ul>
                <!-- Tab Panels -->
                <div class="tab-content">
                  <!-- Tab Content 1 -->
                  <div class="tab-pane in active" id="tab1">
                    <ul class="posts-list">
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb1.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/05/21</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/03/28</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/02/18</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb4.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/02/13</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb5.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/01/15</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                  </div>
                  <!-- Tab Content 2 -->
                  <div class="tab-pane" id="tab2">
                    <ul class="posts-list">
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb1.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/05/21</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/03/28</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb2.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/02/18</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb4.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/02/13</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                      <li>
                        <div class="widget-thumb">
                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/thumb5.jpg" alt="" /></a>
                        </div>
                        <div class="widget-content">
                          <a href="#">Nanamica Graphic</a>
                          <span>2015/01/15</span>
                        </div>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                  </div>
                  <!-- End Tab Content 2 -->
                </div>
                <!-- End Tab Panels -->
              </div>
              <!-- Posts slider Widget -->
              <div class="widget">
                <h5 class="widget-title">Related Posts</h5>
                <div class="relate-slider owl-carousel owl-theme">
                  <div class="portfolio-item item">
                    <div class="portfolio-img">
                      <img alt="" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1.jpg" />
                      <div class="overlay">
                        <a href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/projects/projects-01.jpg" class="lightbox"><i class="more fa fa-search"></i></a>
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
                      <img alt="" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2.jpg" />
                      <div class="overlay">
                        <a href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
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
                      <img alt="" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3.jpg" />
                      <div class="overlay">
                        <a href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3.jpg" class="lightbox"><i class="more fa fa-search"></i></a> 
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
            <!-- Start Blog Posts -->
            <div class="col-md-9">
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                  <a href="#"><i class="icon-moustache"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <div class="touch-slider owl-carousel owl-theme">
                    <div class="item">
                      <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1-large.jpg" alt=""></a>
                    </div>
                    <div class="item">
                      <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2-large.jpg" alt=""></a>
                    </div>
                    <div class="item">
                      <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3-large.jpg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-bubbles  "></i> 124 Comments</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-like "></i> 214 Likes</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">Photography</a>, <a href="#">Tutorials</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-user"></i> John Doe</a></span>
                  </div>
                  <h3 class="post-title"><a href="#">Awesome Gallery Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left"> 
                    <span>Share This article</span>   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                  <a href="#"><i class="icon-pencil"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-post1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-post1.jpg" alt=""></a>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-bubbles  "></i> 124 Comments</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-like "></i> 214 Likes</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">News</a>, <a href="#">Events</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-user"></i> John Doe</a></span>
                  </div>
                  <h3 class="post-title"><a href="#">Amazing Standard Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left"> 
                    <span>Share This article</span>   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->
              <!-- Start Post -->
              <div class="blog-post quote-post">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                  <a href="#"><i class="icon-question"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ipsam aliquid ad maiores assumenda.</p>
                  <span class="name">Mike Ehrmantrout</span>
                </div>
                <!-- End Post feature-inner -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left"> 
                    <span>Share This article</span>   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                  <a href="#"><i class="icon-camcorder"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://player.vimeo.com/video/127958989" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-bubbles  "></i> 124 Comments</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-like "></i> 214 Likes</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">News</a>, <a href="#">Tutorials</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-user"></i> John Doe</a></span>
                  </div>
                  <h3 class="post-title"><a href="#">Vimeo Video Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left"> 
                    <span>Share This article</span>   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->    
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                  <a href="#"><i class="icon-volume-2"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/154798838&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                  </div>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-bubbles  "></i> 124 Comments</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-like "></i> 214 Likes</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">Tutorials</a>, <a href="#">Audio</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-user"></i> John Doe</a></span>
                  </div>
                  <h3 class="post-title"><a href="#">SoundCloud Audio Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left"> 
                    <span>Share This article</span>   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->  
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                  <a href="#"><i class="icon-camcorder"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JH0RMBG41y0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-bubbles  "></i> 124 Comments</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-like "></i> 214 Likes</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">Video</a>, <a href="#">Traning</a></span>
                    <span class="meta-part"><a href="#"><i class="icon-user"></i> John Doe</a></span>
                  </div>
                  <h3 class="post-title"> <a href="#">Video Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left"> 
                    <span>Share This article</span>   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->  
              <!-- Start Pagination -->
              <div id="pagination">
                <span class="all-pages">Page 1 of 3</span>
                <span class="current page-num">1</span>
                <a class="page-num" href="#">2</a>
                <a class="page-num" href="#">3</a>
                <a class="next-page" href="#">Next</a>
              </div>
              <!-- End Pagination -->
            </div>
            <!-- End Blog Posts -->
          </div>
        </div>
      </div>
      <!-- End Content -->
<?php get_footer(); ?>
