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
define('DB_NAME', 'fn_pruebafn');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'fn_pruebafn');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'prueba8039876.,');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'P~,CRJQrd_WA)%oL`(xz9Xu@,hOj]QDZbp5Kk|Cf3ba8v?eo{1K|(q2<1=+)(3lh'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '&_M!,)O01PjEVSHe$k(1Nv#ah&^ZD}mK(RM5sFT<%|)V4WSkhgZkpU+t,e#C^O9$'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '^XD&!D@Y]WnF7-?Q)i/nEW7y^g4d)h$#P8BCQOW&B8Y3}!6t8x.@Z)p=8Lsj~[JH'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'CnSll`OF?RAa6 E[8`f@*<-+XwUTl|!M0F-] 4<8B9!_Ue?#*}^N%`pT*%b{?S+v'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'Ys C0u(4U&XC[p$sjI,p,`~V}OZ6K- U|,{YdXIqPF<I<iPJ$|/-zM03:pMX8$o3'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'tB:X*]6]RMj@T%Y|%$1c;@Z?YAJWbqs`u(.c}R>;JERhk=d|1+tE`dV7 Jb%,-Vi'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '#i~s(>eWsA/`VrVXW}H)(qu/+(uOv3@o,qA<l2p(6<K9QM[MS-_5F/i%k!CR2YtY'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '7)g)9_Y>uLsUY( pu%q%k4wa0-@;5;mz,EZw6(+*+6ha]B]O@iCHgt:HBW4|kOB2'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

define('WPCF7_LOAD_JS', false);
define('WPCF7_LOAD_CSS', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
