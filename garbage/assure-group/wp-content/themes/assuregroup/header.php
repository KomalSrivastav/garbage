<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('title');?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/img/ickon.jpg">
		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slicknav.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
		
   </head>
   <?php wp_head();?>
   <body>
    <!-- Preloader Start -->
    <div class="top-bar">
    <div class="container">
    <div class="row">
    <div class="col-xl-6">
    <p><i class="ti-email"> </i> <a href="#"> contact@assureinfra.com</a></p>
    <p><i class="ti-tablet"></i> +91- 8233 359 128 </p>
    </div>
		
    <div class="col-xl-6">
<div class="top-social">
<a href="#"><i class="fa fa-facebook-f"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>


    </div>
    </div>
    </div>  
    </div>
   <!--start menu_toggle-->
   
   <nav class="navbar navbar-expand-md bg-dark" id="banner">
	<div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span>Logo</span> Here</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> 
	   <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    </ul>
  </div>
	</div>
</nav>
<div class="banner">
	<div class="container">
	<div class="banner-text">
	<div class="banner-heading">
	Glad to see you here !
	</div>
	<div class="banner-sub-heading">
	Here goes the secondary heading on hero banner
	</div>
	<button type="button" class="btn btn-warning text-dark btn-banner">Get started</button>
	</div>
	</div>
</div>
    <header>
  <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                             <div class="logo">
                                <a href="<?php bloginfo('url')?>">
								<?php 
								  $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
								?>
								</a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <?php 
					$args = array( 
					'theme_location'=>'primary',
					'add_li_class'=>'for-mobil-nav'
					);
					wp_nav_menu( $args); 
					
					?>
					</div>
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">                                
                              <div class="dropdown">
  <span> Country <i class="fas fa-globe"> </i></span>
  <div class="dropdown-content">
 <a href="india.html">India</a>
 <a href="mynmar.html">Myanmar</a>
 <a href="srilanka.html">Srilanka</a>
 <a href="philippines.html">Philippines</a>
 <a href="nepal.html">Nepal</a>
 <a href="thailand.html">Thailand</a>
  </div>
</div>
 </div>
    <div class="col-12">
    <div class="mobile_menu d-block d-lg-none">

    <div class="only-mobile">

    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
        <!-- Header End -->
    </header>




<?php
  if(is_front_page()){
echo do_shortcode('[smartslider3 slider="18"]');
}	   
?>
			
