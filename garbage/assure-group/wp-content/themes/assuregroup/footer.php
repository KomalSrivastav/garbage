 <footer>
       <!-- Footer Start-->
      <div class="footer-main">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
				<div class="col-lg-3 col-md-4 col-sm-8">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="<?php bloginfo('url')?>">
								<?php 
								  $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
								?></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera"> 
                                </div>
                             </div>
                             <div class="footer-social">
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                
                            </div>
                         </div>
                       </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4> Company</h4>
                                <ul>
                                   <li><a href="company.html">About Us</a></li>
                                                <li><a href="company.html">Our Vision &amp; Mission</a></li>
                                                <li><a href="company.html">Our Principle</a></li>
                                                <li><a href="company.html">CSR</a></li>
                                                <li><a href="bord-of-director.html">Board of Directors</a></li>
                                                <li><a href="laedership.html">Leadership Team</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>business</h4>
                                <ul>
                                   <li><a href="telecom.html">Telecom</a></li>
                                                <li><a href="mining.html">Mining</a></li>
     </ul>
	</div>
   </div>
   </div>
   <div class="col-lg-3 col-md-4 col-sm-5">
    <div class="single-footer-caption mb-50">
     <div class="footer-tittle">
       <h4>Contacts</h4>
         <div class="footer-pera">
            <p class="info1">
               <i><img src="<?php echo get_template_directory_uri();?>/assets/img/map-pin.png" alt=""></i>
                                    302019, 5, Queens Rd, Moti Nagar, Veer Vihar, Vaishali nagar,Jaipur, Rajasthan 302021</p>
 <p class="info1">
  <i><img src="<?php echo get_template_directory_uri();?>/assets/img/phone.png" alt=""></i>
  + 91 - 8233 359 128 </p>
  <p class="info1">
   <i><img src="<?php echo get_template_directory_uri();?>/assets/img/mail.png" alt=""></i>
   contact@assureinfra.com</p>
   </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
        <!-- footer-bottom aera -->
        
      </div>
       <!-- Footer End-->
 
                      
<div class="footer-copy-right">
    <div class="container">
    <div class="row">
<p class="col-md-6">Designed and Developed by <a href="http://waviz.com/index.html" target="_blank">Waviz Technologies Pvt. Ltd.</a> </p>
<p class="col-md-6" style="text-align:right"> Copyright &copy;2020 Assure Group | All rights reserved  </p>
</div>
</div>
</div>
                  
               
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
		<script src="assets/js/animated.headline.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.sticky.js"></script>
   
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo get_template_directory_uri();?>/assets/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/main.js"></script>
   <?php wp_footer();?>   
  
</body>
</html>