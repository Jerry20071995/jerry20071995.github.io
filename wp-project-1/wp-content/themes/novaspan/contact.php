<?php 
/* Template Name: contact */
 get_header();
?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Contacts Us</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Contact</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Banner -->        
      
      <!-- Start Contact Us Section -->
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title1 upper">
                <i class="fa fa-envelope-o"></i>
                Get On Touch
              </h2>
              <!-- Form -->
              <form action="send.php" id="contact-form" class="contact-form" role="form" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="EMAIL" placeholder="mail@sitename.com">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                  </div>                    
                  <div class="col-md-12">
                    <textarea class="form-control" placeholder="Massage" rows="7"></textarea>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" id="submit" class="btn btn-large btn-effect"><i class="fa fa-check"></i> Send Your Message</button>
                    <div id="success"></div>
                  </div>
                </div> 
              </form>
            </div>
            <div class="col-md-5 col-md-offset-1">
              <h2 class="title1 upper">
                <i class="fa fa-pencil"></i> 
                Contact Information
              </h2>
              <div class="information">
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-map-marker icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Address</h3>
                    <span class="detail">Main Office: NO.22-23 Street Name- City,Country</span>
                    <span class="datail">Customer Center: NO.130-45 Streen Name- City, Country</span>
                  </div>
                </div>                
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-phone icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Phone Numbers</h3>
                    <span class="detail">Main Office: +880 123 456 789</span>
                    <span class="datail">Customer Supprort: +880 123 456 789 </span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-location-arrow icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Email Address</h3>
                    <span class="detail">Customer 
                    Support: info@mail.com</span>
                    <span class="datail">Technical Support: support@mail.com</span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-pencil icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Other Datails</h3>
                    <span class="detail">Site Name: <a href="http://graygrids.com/">Graygrids.com</a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Us Section  -->

      <!-- Start Map Section -->
      <section id="map">
        <div class="title-banner">
            <h2 class="upper text-center">Our Location </h2>
        </div>
      </section>
      <!-- Conatct Section -->
      <div id="google-map"></div>
      <!-- End Map Section -->
<?php get_footer(); ?>