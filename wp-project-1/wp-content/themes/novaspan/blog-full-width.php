<?php 
  /* Template Name: Blog Page */
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
            <!-- Start Blog Posts -->
            <div class="col-md-12">
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <div class="touch-slider owl-carousel" data-slider-pagination="true">
                    <div class="item">
                      <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog1-large.jpg" alt=""></a>
                    </div>
                    <div class="item">
                      <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog2-large.jpg" alt=""></a>
                    </div>
                    <div class="item">
                      <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3-large.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog3-large.jpg" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">Photography</a>, <a href="#">Tutorials</a></span>
                  </div>
                  <h3 class="post-title"><a href="#">Awesome Gallery Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left">   
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
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <a class="lightbox" href="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-post1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog-post1.jpg" alt=""></a>
                </div>
                <!-- End Post feature-inner -->
                <!-- Post Content -->
                <div class="post-content">
                  <div class="meta">
                    <span class="meta-part"><a href="#"><i class="icon-clock"></i> Fabruary 25, 2015</a></span>
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">News</a>, <a href="#">Events</a></span>
                  </div>
                  <h3 class="post-title"><a href="blog-sigle.php">Amazing Standard Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left">   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="blog-sigle.php">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->
              <!-- Start Post -->
              <div class="blog-post quote-post">
                <!-- Post format icon -->
                <!-- Post feature-inner -->
                <div class="feature-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ipsam aliquid ad maiores assumenda.</p>
                  <span class="name">Mike Ehrmantrout</span>
                </div>
                <!-- End Post feature-inner -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left">   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="blog-sigle.php">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
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
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">News</a>, <a href="#">Tutorials</a></span>
                  </div>
                  <h3 class="post-title"><a href="blog-sigle.php">Vimeo Video Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left">   
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="blog-sigle.php">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->    
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
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
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">Tutorials</a>, <a href="#">Audio</a></span>
                  </div>
                  <h3 class="post-title"><a href="blog-sigle.php">SoundCloud Audio Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left">    
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="blog-sigle.php">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->  
              <!-- Start Post -->
              <div class="blog-post">
                <!-- Post format icon -->
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
                    <span class="meta-part"><i class="icon-folder"></i> <a href="#">Video</a>, <a href="#">Traning</a></span>
                  </div>
                  <h3 class="post-title"> <a href="blog-sigle.php">Video Post</a></h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <!-- Post Content -->
                <!-- Share social -->
                <div class="share">
                  <div class="social-link pull-left">    
                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-effect" href="blog-sigle.php">Continue Reading <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Post -->  
              <!-- Start Pagination -->
              <div id="pagination">
              <?php 
                
              ?>
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