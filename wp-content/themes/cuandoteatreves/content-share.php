 <h4><?php _e('Compartir', 'theme_name');?></h4>
 
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebook" target="_blank">
        <i class="fa fa-facebook"></i> Facebook
    </a>
    
    <a href="https://www.facebook.com/sharer.php?s=100&p[title]=<?php the_title();?>&p[summary]=<?php the_excerpt();?>&p[url]=<?php the_permalink();?>&&p[images][0]=<?php the_post_thumbnail_url();?>" class="facebook" target="_blank">
        <i class="fa fa-facebook"></i> Facebook2
 
    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>&text=<?php the_title_attribute(); ?>" class="twitter" target="_blank">
        <i class="fa fa-twitter"></i> Twitter
    </a>
 
    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="googleplus" target="_blank">
        <i class="fa fa-google-plus"></i> Google+
    </a>
 
   <?php //Obtenemos la URL de la imagen destacada
 $pin_imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
 
    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_imagen[0]; ?>" class="pinterest" target="_blank">
        <i class="fa fa-pinterest"></i> Pinterest
    </a>
 
</div> <!-- /. share-post -->

<style>

.share-post {
    border-top: 0;
    margin-top: 0;
    padding-top: 0;
}
 
    .share-post a {
        display: inline-block;
        color: white;
        padding: 0 1em;
        line-height: 2em;
        margin: 0.1em;
    }
 
        .share-post a:hover {
            padding: 0 1.5em;
            text-decoration: none;
        }
 
    .share-post .facebook {
        background: #3b5998;
    }
 
    .share-post .twitter {
        background: #55acee;
    }
 
    .share-post .googleplus {
        background: #dd4b39;
    }
 
    .share-post .pinterest {
        background: #cc2127;
    }
</style>