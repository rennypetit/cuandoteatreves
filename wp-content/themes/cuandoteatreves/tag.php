
<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/single-blog.css">
<div id="title-category" style="display: none;"><?php single_cat_title();?></div>

<?php $total_post = $post_one = $post_two = $post_three = 0; //inicializo en 0 todos los contadores de los ciclo de los post
  if (have_posts()) : while( have_posts() ) : the_post(); //ciclo del post para contar la canridad?>
    <?php $total_post++; //cantidad total de los post
  endwhile; endif; //cierre del ciclo
  $total_post; //total de todos los post de la categoria;
  $post = round(($total_post)/3);//se divide el total de post en 3 devido a que son tres columnas

  if ($total_post == $post*3) {
  //if el total de los posts es = al total de los posts redondeados quiere decir que la division se realizo en partes iguales y no obtuvo residuo ejemplo: 9/3 = 3
    $post_one = $post_two = $post_three = $post;
      
    } elseif ($total_post > $post*3)  {
      //if el total de los post es menor al post redondeado por*3 se le sumará uno a la primera columna para hacer equivalencia ejemplo = 7/3 = 2.3 = 2 por lo tanto cada post seria de 2 sumando un total de 6, por ende se le suma uno a la columna previamente dicha 
      $post_one = $post +1;
      $post_two = $post;
      $post_three = $post;


    } elseif ($total_post < $post*3) {
      //if el total de los post es mayor al post redondeado por*3 se le restará uno a la trcera columna para hacer equivalencia ejemplo = 8/3 = 2.66 = 3 por lo tanto cada post seria de 3 sumando un total de 8, por ende se le resta uno a la columna previamente dicha 
       
      $post_one = $post;
      $post_two = $post;
      $post_three = $post -1;
    }
      
?>

<!--section bDestacados-->
<section id="destacados">
  <div class="destacado-home destacado-home-blog">
    <div class="container">
      <div class="">
        <div class="atrevete atrevetes" style="    display: flex;
    justify-content: center;">
          <div id="category-black">
            <h2 class="wow zoomIn animated"><span></span><h2>   
          </div>
          <div id="category-fucsia">
          <h2 class="category-black wow zoomIn animated"><span  data-wow-duration="5000ms" class="pasion" style="padding-left: 20px;"></span></h2>
            
          </div>
        </div>
      </div>
      <div class="row">

          <!-- column1 -->
          <?php $quant_post_one = 0; ?>
          <div class="col-sm-4 card-post">
            <?php if (have_posts()) : while( have_posts()): the_post(); ?>
              <?php if ($post_one > $quant_post_one): ?>
                
              <a href="<?php the_permalink(); ?>">
                <div class="articulos-card">      
                  <div class=" articulo-image bh-overlay-image-hover articulo-image1 ">
                    <div class="articulo-image">
                      <?php the_post_thumbnail();?>
                    </div>
                  </div>          
                  <div class=" texto-pasion txt-blog">
                    <div class="col-sm-12 titulo-categoria">
                    <h2><?php the_title(); ?></h2>
                      <div class="parrafo-blog">
                        <p><?php the_content(); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php endif ?>
              <?php $quant_post_one++; ?>
             <?php endwhile; endif; ?>
            </div>
            <!-- /column1 -->
            <!-- column2 -->
          <?php $quant_post_two = 0; ?>
          <div class="col-sm-4">
        
            <?php if (have_posts()) : while( have_posts()): the_post(); ?>
              <?php if (($quant_post_two >= $post_one) and ($quant_post_two < $total_post-$post_three)): ?>
              
              <a href="<?php the_permalink(); ?>">
                <div class="articulos-card">      
                  <div class=" articulo-image bh-overlay-image-hover articulo-image1 ">
                    <div class="articulo-image">
                      <?php the_post_thumbnail();?>
                    </div>
                  </div>          
                  <div class=" texto-pasion txt-blog">
                    <div class="col-sm-12">
                    <h2><?php the_title(); ?></h2>
                      <div class="parrafo-blog">
                        <p><?php the_content(); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php endif ?>
              <?php $quant_post_two++; ?>
             <?php endwhile; endif; ?>
            </div>
            <!-- /column2 -->
            <!-- column3 -->
         
            <?php $quant_post_three = 0; ?>
          <div class="col-sm-4">
            <?php if (have_posts()) : while( have_posts()): the_post(); ?>
              <?php if ($quant_post_three >= $total_post-$post_three): ?>
                 
              <a href="<?php the_permalink(); ?>">
                <div class="articulos-card">      
                  <div class=" articulo-image bh-overlay-image-hover articulo-image1 ">
                    <div class="articulo-image">
                      <?php the_post_thumbnail();?>
                    </div>
                  </div>          
                  <div class=" texto-pasion txt-blog">
                    <div class="col-sm-12 titulo-categoria">
                    <h2><?php the_title(); ?></h2>
                      <div class="parrafo-blog">
                        <p><?php the_content(); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php endif ?>
              <?php $quant_post_three++; ?>
             <?php endwhile; endif; ?>
            </div>
          <!-- /column3 -->
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
