<?php get_header(); ?>
<section class="content">
<section class="banner_area" class="banner_area " style="background: url(<?php echo get_template_directory_uri();?>/assets/img/Contacto.jpg); background-attachment: fixed;background-size: cover;
background-position: center top;">
<div class="container">
  <div class="banner_content contac-text">
    <h4>¿Conversamos? </h4>
  </div>
</div>
</section>

<section class="contact_area">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact_details">
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-phone"></i>
            </div>
            <div class="media-body">
              <h4>teléfono</h4>
              <h5>+56 9 6134 7830</h5>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-envelope-o"></i>
            </div>
            <div class="media-body">
              <h4>Correo electrónico</h4>
              <h5>atrevete@cuandoteatreves.com</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row contact_form_area">
         <div class="col-md-12">
          <?php echo do_shortcode('[contact-form-7 id="124" title="contactame"]'); ?>
        </div>

      </div>
    </div>
  </div>
</section>
</section>
<?php get_footer(); ?>

<style>
.mask{
  position: absolute;
  background-color: rgba(0,0,0,0.09);
  height: 100%;
  width: 100%;

}
</style>