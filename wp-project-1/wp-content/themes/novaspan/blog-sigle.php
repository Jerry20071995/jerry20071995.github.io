<?php 
/* Template Name: Blog single */
 get_header();
?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Single Post</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <a href="#">Blog</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Gallery Post With Nice Lightbox</span>
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
            <div class="col-md-9">
              <!-- Start Single Post Area -->
              <div class="blog-post single-gallery">
                <!-- Post format icon -->
                <div class="post-format">
                  <span>
                    <a href="#"><i class="icon-moustache"></i></a>
                  </span>
                </div>
                <!-- Post feature-inner -->
                <div class="feature-inner">
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
                  <h3 class="post-title"><a href="#">Gallery Post With Nice Lightbox</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                  <blockquote>
                    <i class="fa fa-quote-right"></i>
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.
                    </span>
                  </blockquote>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  
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
                    <div class="post-tags-list">
                      <a href="#">Theme</a>
                      <a href="#">Mobile</a>
                      <a href="#">Design</a>
                      <a href="#">Wordpress</a>
                      <a href="#">Jquery</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Single Post Area -->
              
              <!-- Start Comment Area -->
              <div id="comments">
                <h2 class="comments-title"><i class="icon-bubbles"></i> Leave Comment</h2>
                <ol class="comments-list">
                  <li>
                    <div class="comment-box clearfix">
                      <div class="avatar"><a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/user1.jpg" /></a></div>
                      <div class="comment-content">
                        <div class="comment-meta">
                          <h4 class="comment-by">
                            <a href="#">John Doe</a>
                          </h4>
                          <span class="comment-date">May 15, 2015 at 7:39 pm</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <a href="#" class="reply-link">Reply</a>
                      </div>
                    </div>
                    <ul>
                      <li>
                        <div class="comment-box clearfix">
                          <div class="avatar">
                            <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/user2.jpg" /></a>
                          </div>
                          <div class="comment-content">
                            <div class="comment-meta">
                              <h4 class="comment-by">
                                <a href="#">Jane Smith</a>
                              </h4>
                              <span class="comment-date">May 15, 2015 at 7:39 pm</span>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <a href="#" class="reply-link">Reply</a>
                          </div>
                        </div>
                        <ul>
                          <li>
                            <div class="comment-box clearfix">
                              <div class="avatar"><a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/user3.jpg" /></a></div>
                              <div class="comment-content">
                                <div class="comment-meta">
                                  <h4 class="comment-by">
                                    <a href="#">John Doe</a>
                                  </h4>
                                  <span class="comment-date">May 15, 2015 at 7:39 pm</span>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                                <a href="#" class="reply-link">Reply</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div class="comment-box clearfix">
                      <div class="avatar"><a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/user4.jpg" /></a></div>
                      <div class="comment-content">
                        <div class="comment-meta">
                          <h4 class="comment-by">
                            <a href="#">Jane Smith</a>
                          </h4>
                          <span class="comment-date">May 15, 2015 at 7:39 pm</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <a href="#" class="reply-link">Reply</a>
                      </div>
                    </div>
                  </li>
                </ol>
                <!-- Start Respond Form -->
                <div id="respond">
                  <h2 class="respond-title">Leave a reply</h2>
                  <form action="#">
                    <div class="row">
                      <div class="col-md-4">
                        <input id="author" class="form-control" name="author" type="text" value="" size="30" placeholder="Name (required)">
                      </div>
                      <div class="col-md-4">
                        <input id="email" class="form-control" name="author" type="text" value="" size="30" placeholder="Email (required)">
                      </div>
                      <div class="col-md-4">
                      <input id="url" class="form-control" name="url" type="text" value="" size="30" placeholder="Website">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" placeholder="Comment..."></textarea>
                        <button type="submit" id="submit" class="btn btn-large btn-effect"><i class="fa fa-check"></i> Submit Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- End Respond Form -->
              </div>
              <!-- End Comment Area -->
            </div>

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
          </div>
        </div>
      </div>
      <!-- End content -->
<?php get_footer(); ?>