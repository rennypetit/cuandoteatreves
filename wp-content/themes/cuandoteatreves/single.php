<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <section class="banner_blog">
    <div class="container">
      <div class="banner_blog-contendido">
        <h1 class=" container"><?php the_title(); ?></h1>
        <h4><?php the_author(); ?> <?php echo get_the_date(); ?></h4>

      </section>
      <?php $post_thumbnail_id = get_post_thumbnail_id();
      $url = wp_get_attachment_url( $post_thumbnail_id);?>
      <div class="container parallax" style="background-image: url('<?php echo $url; ?>');     width: 100%;
      max-height: 340px;
      height: 340px;">
      <div class="col-sm-12">
        <div class="img-blogg">
          <img height="530"  alt="">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="texto-blogg">
            <p><?php echo the_content(); ?></p>



              <!-- <div class="blog_post_highlight">
                Donec pretium, lectus ac dictum viverra, nisl augue maximus orci, at scelerisque ipsum sapien in lorem. Pellentesque vehicula facilisis purus sit amet ultricies. Nam eleifend sit amet nisl ut fermentum.
              </div> -->

              <div class="col-md-12">

                <div class="tags">
                  <h4>Etiquetas:</h4>
                  <p> <?php the_tags( '', '', '' ); ?> </p>
                </div>
              </div>
            </p>
            <div class="comparte">
              <div class="sidebar_section_title">
                <h4>Comparte este artículo en las redes sociales</h4>
                <div class="">
                  <div class="tag"></i><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></div>
                  <div class="tag"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                  <div class="tag"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>&text=<?php the_title_attribute(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></div> </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="container coment-space" style="">
      <div class="row">
        <div class="comentarios">
          <?php if ( comments_open() || get_comments_number() ) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <style>
.coment-space{
  padding: 0px 85px;
}
    </style>
    <?php get_footer(); ?>