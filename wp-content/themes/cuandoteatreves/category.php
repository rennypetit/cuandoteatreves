<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/single-blog.css">
<div id="title-category" style="display: none;"><?php single_cat_title();?></div>



<?php $total_post = -1;//se coloca en -1 debido a que el ultimo post se mostrará en grande
$post_one = $post_two = $post_three = -1; //inicializo en 0 todos los contadores de los ciclo de los post
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

    <div class="destacado-home destacado-home-blog fix-m">
      
     <section class="banner_area " style="background: url(<?php echo $image;?>); background-attachment: fixed;   
     background-position: center top;">
    <div class="banner_area_mask"></div>
     <div class="container">
      <div class="banner_content">
       
      </div>
    </div>
    
  </section>
  <div class="atrevete atrevetes" style="    display: flex;
  justify-content: center;">
  <div id="category-black">
    <h2 class="articulo-image wow zoomIn animated top-txt"><span></span><h2>   
    </div>
    <div id="category-fucsia">
      <h2 class="articulo-image wow zoomIn animated top-txt"><span  data-wow-duration="5000ms" class=" <?php echo $title_b.' pasion';?>"></span></h2>
    </div>
  </div>
  <div class="container">





    <?php 
      // Listado de categorias
    $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'DES',
      'posts_per_page' => 1
    ) );
    ?>
    <?php $idcategoria = get_query_var('cat');?>
    <?php  $idcategoria; ?>
    <?php foreach ($categories as $category):?>
      <?php if ($idcategoria == $category->term_id) {
        $category_name;
      }?>
    <?php endforeach; ?>        
    <?php    
    $args = array(
      'category_name' => $category_name,
      'posts_per_page' => 1,
              // 'orderby' => 'rand'
      'orderby' => 'DES'
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
     <div class="row">
      <div class="col-sm-8 card-post ">
      
      <a href="<?php the_permalink(); ?>">  <div class="articulos-blog"> 
          <div class="articulo-image bh-overlay-image-hover"> 
            <div class="<?php echo $articulo_image;?> fix-banner">
              
              <?php the_post_thumbnail();?>
            </div> 
          </div>         
        </div></a>
      
    </div>
    <div class="<?php echo 'col-sm-4 subtitulo-blog txt-blog'.$titulo_categoria;?>">
    <a href="<?php the_permalink(); ?>"><h3 class="titulo-categoria1"><?php the_title(); ?></h3>
      <p style="" class="content-post-cover"><?php the_content(); ?>. 
    
      <a href="<?php the_permalink(); ?>" class="link-more">  Ver más...</a>
    </p>
      
     

    </a>
   
  </div>

  </div>
<?php endwhile; endif; ?>
<div class="row">

  <!-- column1 -->
  <?php $quant_post_one = -1; ?>
  <div class="col-sm-4 card-post">
    <?php if (have_posts()) : while( have_posts()): the_post(); ?>

      <?php if (($quant_post_one >= 0) and ($post_one > $quant_post_one)): ?>

        <a href="<?php the_permalink(); ?>">
          <div class="<?php echo 'articulos-card '.$titulo_categoria;?>">      
            <div class="articulo-image bh-overlay-image-hover">
              <div class="<?php echo $articulo_image;?>">
                <?php the_post_thumbnail();?>
              </div>
            </div>          
            <div class="  txt-blog">
              <div class="<?php echo 'col-sm-12 subtitulo-blog txt-blog '.$titulo_categoria;?>">
                <h2><?php the_title(); ?></h2>
                <div class="parrafo-blog">
                  <p><?php the_excerpt(); ?></p>
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
  <?php $quant_post_two = -1; ?>
  <div class="col-sm-4">

    <?php if (have_posts()) : while( have_posts()): the_post(); ?>
      <?php if (($quant_post_one >= 0) and ($quant_post_two >= $post_one) and ($quant_post_two < $total_post-$post_three)): ?>

        <a href="<?php the_permalink(); ?>">
          <div class="<?php echo 'articulos-card '.$titulo_categoria;?>">      
            <div class="articulo-image bh-overlay-image-hover">
              <div class="<?php echo $articulo_image;?>">
                <?php the_post_thumbnail();?>
              </div>
            </div>          
            <div class="  txt-blog">
              <div class="<?php echo 'col-sm-12 subtitulo-blog txt-blog '.$titulo_categoria;?>">
                <h2><?php the_title(); ?></h2>
                <div class="parrafo-blog">
                  <p><?php the_excerpt(); ?></p>
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

  <?php $quant_post_three = -1; ?>
  <div class="col-sm-4">
    <?php if (have_posts()) : while( have_posts()): the_post(); ?>
      <?php if (($quant_post_one >= 0) and ($quant_post_three >= $total_post-$post_three)): ?>

        <a href="<?php the_permalink(); ?>">
          <div class="<?php echo 'articulos-card '.$titulo_categoria;?>">      
            <div class="articulo-image bh-overlay-image-hover">
              <div class="<?php echo $articulo_image;?>">
                <?php the_post_thumbnail();?>
              </div>
            </div>          
            <div class="  txt-blog">
              <div class="<?php echo 'col-sm-12 subtitulo-blog txt-blog '.$titulo_categoria;?>">
                <h2><?php the_title(); ?></h2>
                <div class="parrafo-blog">
                  <p><?php the_excerpt(); ?></p>
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