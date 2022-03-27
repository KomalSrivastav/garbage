<?php 
/*
Template Name: Full width
*/
get_header();?>

   <main>
          <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <h2><?php the_title ();?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Choose Best do End-->
        <!-- Visit Stuffs Start -->
        <div class="visit-area fix visite-padding">
           
            <div class="container"> 
			  <div class="col-lg-12">
			  
 <div class="section-top-border">
         
        <div class="row">
          <div class="col-md-12">
            <?php the_content();?>
        </div>
	

     
  </div>
  </div>
  </div>
    </main>
<?php get_footer();?>
