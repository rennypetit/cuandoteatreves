<?php get_header(); ?>
<div class="mask"></div>
<section class="banner_area" class="banner_area " style="background: url(<?php echo get_template_directory_uri();?>/assets/img/CUentame_tu_historia_2.jpg); background-attachment: fixed;background-size: cover;
    background-position: center -44%;">
  <div class="container">
    <div class="banner_content contac-text">
      <h4><?php the_title();?> </h4>
    </div>
  </div>
</section>


<!--<div id="title-category" style="display: none;"><?php the_title();?></div>-->
  
  <section class="contact_area">
    
<!--
        <div id="category-black">
          <h2 class="wow zoomIn animated"><span></span><h2>   
          </div>
          <div id="category-fucsia" style="padding-left: 10px;">
            <h2 class="wow zoomIn animated"><span  data-wow-duration="5000ms" class="morado"></span></h2>
          </div>
-->  
  
    <div class="container">

      <div class="historia row justify-content-center">
     
          <div class="col-12 col-md-6 text-center">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                  
                  <?php the_content(); ?>
                  
              <?php endwhile; endif; ?>
            <div class="row contact_form_area">
             <div class="col-md-12">
              <?php echo do_shortcode('[contact-form-7 id="123" title="cuentame tu historia"]'); ?>
            </div>

         
 
      
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
