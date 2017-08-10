<?php 
  /* Template Name: accordion */
  get_header(); 
?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Accordion & Toggles</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Accordion & Toggles</span>
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
            <!-- Page Content -->
            <div class="col-md-12 page-content">
              <!-- Toggle -->
              <div class="panel-group">
                <!-- Start Toggle 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                      <i class="fa fa-angle-up control-icon"></i>
                      <i class="fa fa-desktop"></i> Fully Responsive Theme
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:180px;" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/author.png" /> <strong class="accent-color">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <strong>printer</strong> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</div>
                  </div>
                </div>
                <!-- End Toggle 1 -->
                <!-- Start Toggle 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                      <i class="fa fa-angle-down control-icon"></i>
                      <i class="fa fa-gift"></i> Touchable Slider
                      </a>
                    </h4>
                  </div>
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                  </div>
                </div>
                <!-- End Toggle 2 -->
                <!-- Start Toggle 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">
                      <i class="fa fa-angle-down control-icon"></i>
                      <i class="fa fa-tint"></i> Title Without Icon
                      </a>                     
                    </h4>
                  </div>
                  <div id="collapse-3" class="panel-collapse collapse">
                    <div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                  </div>
                </div>
                <!-- End Toggle 3 -->
              </div>
              <!-- End Toggle -->
              <!-- Divider -->
              <div class="hr5" style=" margin-top:45px; margin-bottom:40px;"></div>
              <div class="row">
                <div class="col-md-6">
                  <h4 class="classic-title"><span>Accordion Style</span></h4>
                  <!-- Accordion -->
                  <div class="panel-group" id="accordion">
                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
                          <i class="fa fa-angle-up control-icon"></i>
                          <i class="fa fa-desktop"></i> Fully Responsive Theme
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-4" class="panel-collapse collapse in">
                        <div class="panel-body">Duis ute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <strong>readable English</strong>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                      </div>
                    </div>
                    <!-- End Accordion 1 -->
                    <!-- Start Accordion 2 -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5" class="collapsed">
                          <i class="fa fa-angle-down control-icon"></i>
                          <i class="fa fa-gift"></i> Touchable Slider
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-5" class="panel-collapse collapse">
                        <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                      </div>
                    </div>
                    <!-- End Accordion 2 -->
                    <!-- Start Accordion 3 -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse-6" class="collapsed">
                          <i class="fa fa-angle-down control-icon"></i>
                          <i class="fa fa-tint"></i> Retina Ready
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-6" class="panel-collapse collapse">
                        <div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                      </div>
                    </div>
                    <!-- End Accordion 3 -->
                  </div>
                  <!-- End Accordion -->
                </div>
                <div class="col-md-6">
                  <!-- Classic Heading -->
                  <h4 class="classic-title"><span>Toggle Style</span></h4>
                  <!-- Toggle -->
                  <div class="panel-group">
                    <!-- Start Toggle 1 -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#toggle" href="#collapse-7">
                          <i class="fa fa-angle-up control-icon"></i>
                          <i class="fa fa-desktop"></i> Fully Responsive Theme
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-7" class="panel-collapse collapse in">
                        <div class="panel-body">Duis ute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <strong>readable English</strong>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                      </div>
                    </div>
                    <!-- End Toggle 1 -->
                    <!-- Start Toggle 2 -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#toggle" href="#collapse-8" class="collapsed">
                          <i class="fa fa-angle-down control-icon"></i>
                          <i class="fa fa-gift"></i> Touchable Slider
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-8" class="panel-collapse collapse">
                        <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                      </div>
                    </div>
                    <!-- End Toggle 2 -->
                    <!-- Start Toggle 3 -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#toggle" href="#collapse-9" class="collapsed">
                          <i class="fa fa-angle-down control-icon"></i>
                          <i class="fa fa-tint"></i> Retina Ready
                          </a>
                        </h4>
                      </div>
                      <div id="collapse-9" class="panel-collapse collapse">
                        <div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                      </div>
                    </div>
                    <!-- End Toggle 3 -->
                  </div>
                  <!-- End Toggle -->
                </div>
              </div>
              <!-- Divider -->
              <div class="hr5" style=" margin-top:45px; margin-bottom:40px;"></div>
              <!-- Accordion 2 -->
              <div class="accordion accordion-box">
                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <!-- Toggle Headin -->
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-a5" class="collapsed">
                    <i class="fa fa-angle-down control-icon"></i>
                    How do I pay for items on the Marketplaces?
                    </a>                        
                  </h4>
                  <!-- Toggle Content -->
                  <div id="collapse-a5" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est non asperiores veniam ipsam deserunt ea earum provident! Aliquid aut nisi, quas vel, porro voluptatum eum corporis ipsum quam aliquam maiores.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est non asperiores veniam ipsam deserunt ea earum provident! Aliquid aut nisi, quas vel, porro voluptatum eum corporis ipsum quam aliquam maiores.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, laborum, officia? Ut atque dignissimos minus, delectus perspiciatis, obcaecati est omnis fuga recusandae repudiandae excepturi labore commodi dolores nulla repellat eius.</p>
                    </div>
                  </div>
                </div>
                <!-- End Accordion 1 -->
                <!-- Start Accordion 2 -->
                <div class="panel panel-default">
                  <!-- Toggle Headin -->
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-a6" class="collapsed">
                    <i class="fa fa-angle-down control-icon"></i>
                    How do I become an author?
                    </a>                        
                  </h4>
                  <!-- Toggle Content -->
                  <div id="collapse-a6" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt consequatur, quos maiores sequi modi reiciendis porro aliquid, ex perspiciatis iure sed, dolores neque ab et blanditiis quod laudantium harum aperiam.</p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio incidunt inventore deserunt minus blanditiis eligendi aperiam corporis ab, maiores recusandae pariatur impedit quos debitis modi assumenda vero porro dicta molestias.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Accordion 2 -->
                <!-- Start Accordion 3 -->
                <div class="panel panel-default">
                  <!-- Toggle Headin -->
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-a7" class="collapsed">
                    <i class="fa fa-angle-down control-icon"></i>
                    What do you mean by an End Product?
                    </a>                        
                  </h4>
                  <!-- Toggle Content -->
                  <div id="collapse-a7" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo repellendus quas voluptate dolorem ipsa maxime, ullam placeat sint praesentium quo, et veritatis excepturi maiores asperiores sunt! Dolor officiis eos placeat!</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus soluta libero aperiam expedita, mollitia accusantium voluptates perspiciatis tempore, beatae voluptatibus, minus ratione voluptate fuga inventore maiores quam ipsam nisi.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed harum cupiditate facilis laborum delectus dolores voluptas ut hic in, iste, vero doloribus, placeat quaerat. Recusandae iure, voluptatibus porro optio corporis.</p>
                    </div>
                  </div>
                </div>
                <!-- End Accordion 3 -->
              </div>
              <!-- End Accordion 2 -->
            </div>
            <!-- End Page Content-->
          </div>
        </div>
      </div>
      <!-- End Content -->
<?php get_footer(); ?>