<?php get_header(); ?>
<section class="content">
  <section class="acerca">
    <section class="banner_area" class="banner_area " style="background: url(<?php echo get_template_directory_uri();?>/assets/img/Atrevete_a_mas.jpg); background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    <div class="container">
      <div class="banner_content">
        <h4>Acerca de mi</h4>
      </div>
    </div>
  </section>

  <section class="separator">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <div class="border-acerca"> 
              <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="texto-acerca">
              <?php the_content(); ?>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-2 order-md-1">
          
           <div class="texto-acerca" 
              <?php the_field('descripcion2');?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-1 order-md-2">
            <div class="border-acerca"> 
             <img src="<?php the_field('imagen2');?>" alt="">
            </div>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </section>
</section>

<?php get_footer(); ?>