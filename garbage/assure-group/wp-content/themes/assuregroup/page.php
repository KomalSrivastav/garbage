<?php get_header();?>
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="section-tittle text-center mb-80">
                        <span>Assure Group</span>
                        <h2><?php the_title();?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-paddingr">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar"> 
          <div id="telecom">
            <h2 class="mb-2"><?php the_title();?></h2>
           <?php the_content();?>
             </div> 

                    </div>
                </div>
               <?php get_sidebar();?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

 <?php get_footer();?>