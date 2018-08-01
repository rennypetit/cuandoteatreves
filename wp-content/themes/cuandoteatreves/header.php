<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="Title" content="Cuando te atreves">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="description" content="">
	<title>Cuando te atreves</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
<?php if (is_single()): ?>	
    <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
    <!-- twitter -->
      <meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@flickr" />
<meta name="twitter:title" content="<?php the_title();?>" />
<meta name="twitter:description" content="<?php echo the_excerpt();?>" />
<meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>" />
<meta name="twitter:url" content="<?php echo the_permalink(); ?>" />
     <!-- end twitter -->
    <!-- facebook -->
      <meta property="og:title" content="<?php the_title();?>" />
      <meta property="og:description" content="<?php echo the_excerpt();?>" />
      <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>"/>
      <meta property="og:url" content="<?php echo the_permalink(); ?>" />
    <!-- end facebook -->

    
    <?php endwhile; endif; ?>
<?php endif; ?>
</head>
<body>
	<header id="header">
	  <!-- navbar -->
	  <div class="container">
	    <div class="row header-top align-items-center">
	      <div class="col-lg-6 col-sm-6 menu-top-right">
	        <a class="contact-header" href="mailto:info@horseclub.com" style="font-size: 13px;">atrevete@cuandoteatreves.com</a>

	      </div>
	      <div class="col-lg-6 col-sm-6 menu-top-right">
	        <div class="redes-sociales">
	          <ul>
	            <li><a href="https://www.facebook.com/cuandoteatreves/"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
	            <li><a href="https://www.instagram.com/cuandoteatreves/"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCRLbBPruSdD7yIgxKdrPHig"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	    <hr class="nav-linea">
	  	
	  </div>  
	  <nav class="container navbar navbar-expand-lg navbar-light" id="navbar">
	    <a class="navbar-brand" href="https://cuandoteatreves.com/index.php/"><img class="logo-navbar" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cta.svg" alt=""></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ml-auto ">

			<?php 
				$page = basename($_SERVER['PHP_SELF']);  
				$home = $acerca = $blog = $atrevete = $atrevete_mas = $contacto = 'fromLeft';
			?>
				<?php switch ($page) {
				//home
					case 'index.php':
					$home = 'visitado';
					break;
				//acerca de mi
					case 'acerca-de-mi':
					$acerca = 'visitado';
					break;
				//blog
					case 'blog':
					$blog = 'visitado';

					break;
				//atrevete
					case 'atrevimientos-apasionados': case 'me-atrevo-a-sugerirte': case 'cuentame-tu-historia':
					$atrevete = 'visitado';

					break;
				//atrevete a mas
					case 'finanzas': case 'crecimiento-personal':
					$atrevete_mas = 'visitado';

					break;
				//contacto
					case 'contacto':
					$contacto = 'visitado';

					break;

				}?>

	        <li class="nav-item <?php echo $home;?>">
	          <a class="nav-link" href="<?php echo bloginfo('url'); ?>">Home <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item <?php echo $acerca;?>">
	          <a class="nav-link" href="<?php echo bloginfo('url').'/index.php/acerca-de-mi/'; ?>">Acerca de mi</a>
	        </li>
	        <li class="nav-item <?php echo $blog;?>">
	          <a class="nav-link" href="<?php echo bloginfo('url').'/index.php/category/blog/'; ?>">Blog</a>
	        </li>
	        <li class="nav-item dropdown <?php echo $atrevete;?>">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            Atrévete
	          </a>
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <a class="dropdown-item fromLeft" href="<?php echo bloginfo('url').'/index.php/category/atrevimientos-apasionados/'; ?>">Atrevimientos apasionados</a>
	            <a class="dropdown-item fromLeft" href="<?php echo bloginfo('url').'/index.php/category/me-atrevo-a-sugerirte/'; ?>">Me atrevo a sugerirte</a>
	            <div class="dropdown-divider"></div>
	            <a class="dropdown-item fromLeft"  href="<?php echo bloginfo('url').'/index.php/cuentame-tu-historia/'; ?>">Cuéntame tu historia</a>
	          </div>
	        </li>
	        <li class="nav-item dropdown <?php echo $atrevete_mas;?>">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            Atrévete a más
	          </a>
	          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
	            <a class="dropdown-item fromLeft" href="<?php echo bloginfo('url').'/index.php/category/finanzas/'; ?>">Finanzas</a>
	            <a class="dropdown-item fromLeft" href="<?php echo bloginfo('url').'/index.php/category/crecimiento-personal/'; ?>">Crecimiento personal</a>
	          </div>
	        </li>
	        <li class="nav-item <?php echo $contacto;?>">
	          <a class="nav-link" href="<?php echo bloginfo('url').'/index.php/index.php/contacto/'; ?>">Contacto</a>
	        </li>
	      </ul>
	    </div>
	  </nav>
	  <!-- navbar -->
	</header> <!--END Header-->
