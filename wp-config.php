<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cuandoteatreves');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '#J&8uh+jUr]`AI<G@-|VG[xOPn^:G=:vDh&;~C<>GE*TPnG?w:jxGMo<QP=$mFxF');
define('SECURE_AUTH_KEY', '<g8>Ns1.HA9v[;`zMe.<Yus:Hl=T;i|G@z&bLqMQeLN&n~S%Un<:r=/(!vtN.FK!');
define('LOGGED_IN_KEY', 'DjLS))9F,J2huEf9oD#cZ^H*2-6xYatt1M&{dd2}t8eUGT~]n<Sg6}wDs~5Ke2f<');
define('NONCE_KEY', 'wHC[o-j4a3|W7u}CYHn,X^Oj${0{v<ar<h^d-iL!m#9RF}YYVkEZ/]iO_0SKR]F=');
define('AUTH_SALT', 'o_vm@nPjF>=zltO>AW$Fv<LjI)0Y2,VXX?<W#z=[nE0hk*sHtSp`3=z,m5D~YDHt');
define('SECURE_AUTH_SALT', '$HGA$Vcxr]Zarh)n6z6,NxM4:0t%!JF2fX{/,A`yy%=!TSvjvso*r4< $YyDw5})');
define('LOGGED_IN_SALT', '=SLd[Wb8ZN2XT7&b2=M{_ |N@QsSFTegRJ.,0o:*wF2rvvZ.QbO<~3EF~>ZI@gUn');
define('NONCE_SALT', ':{Fw,T-pn_cD!?=T9`L!Vsng1?:k|(UO&uh>O/!5tP`H%3@7%0n]TT]v14p%^*oM');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');


