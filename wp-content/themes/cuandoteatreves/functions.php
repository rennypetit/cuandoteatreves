<?php
//*****************************************************css y js**********************************************************************
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS

  wp_deregister_script('jquery'); 
  wp_register_script('jquery', get_stylesheet_directory_uri().'/assets/js/jquery.min.js', false, '1.3.2', true);
  wp_enqueue_script( 'typed', get_template_directory_uri() . '/assets/js/typed.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array ( 'jquery' ), 1.1, true);

  
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'single', get_template_directory_uri() . '/assets/js/single.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'svg', get_template_directory_uri() . '/assets/js/svgdata.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'vivus', get_template_directory_uri() . '/assets/js/vivus.js', array ( 'jquery' ), 1.1, true);

  wp_enqueue_script( 'typedwrite', get_template_directory_uri() . '/assets/js/typewriter.js', array ( 'jquery' ), 1.1, true);


}
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');

//agregar imagenes en los post
if ( function_exists( 'add_theme_support' ) )
  add_theme_support( 'post-thumbnails' );



//*****************************************************fin css y js**********************************************************************

//+++++++++++++++++++++++++++++++++++++++++++++++++++post mas visitados++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Funci��n para contar visualizaciones de un post.
function set_post_views() {
  if (is_single()) {
    $post_ID = get_the_ID();
    $count = get_post_meta( $post_ID, 'post_views', true );

    if ( $count == '' ) {
      delete_post_meta( $post_ID, 'post_views' );
      add_post_meta( $post_ID, 'post_views', 1 );
    } else {
      update_post_meta( $post_ID, 'post_views', ++$count );
    }
  }
}
add_action( 'wp', 'set_post_views' );

// Funci��n para obtener el n��mero de visualizaciones de un post
function get_post_views($post_ID){
  $count = get_post_meta($post_ID, 'post_views', true);

  if ($count == ''){
    delete_post_meta($post_ID, 'post_views');
    add_post_meta($post_ID, 'post_views', 0);
    return 0;
  }
  return $count;
}

// A�0�9adir columna al listado de post de wp-admin
function posts_column_views($defaults){
  $defaults['post_views'] = __('Vistas', 'your_textdomain');
  return $defaults;
}
add_filter('manage_posts_columns', 'posts_column_views');

function posts_custom_column_views($column_name, $id){
  if ($column_name === 'post_views'){
    echo get_post_views(get_the_ID());
  }
}
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);
//+++++++++++++++++++++++++++++++++++++++++++++++++fin post mas visitados+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Mi Pensamiento',
        'id'            => 'general',
        'descripcion' => 'Incluir solo el Sidebar de Texto',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
};

if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'suscriptores',
        'id'            => 'subscribers',
        'descripcion' => 'Incluir solo el Sidebar Email Subscribers',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
};


//excerpt----------------------------

//limitar a 25caracteres
add_filter( 'the_content', 'frantitle_excerpt');
function frantitle_excerpt($excerpt , $limit=55, $trailing='',$break=".") {
  if (!is_single() && !is_page() ) {
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $words = explode(' ',$excerpt);
  if ( count($words) >= $limit) {
    $excerpt = implode(' ', array_slice($words, 0, $limit)). $trailing;
    return($excerpt);
  }
  else {
    return($excerpt);
  }
}
else {
  return($excerpt);
}
}
//end excerpt