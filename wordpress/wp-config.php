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
//define('DB_NAME', 'aleinmobiliaria');
define('DB_NAME', 'habitain_movili');

/** Tu nombre de usuario de MySQL */
//define('DB_USER', 'aleinmobiliaria');
define('DB_USER', 'habitain_adinmobi');

/** Tu contraseña de MySQL */
//define('DB_PASSWORD', 'ALE1nm0');
define('DB_PASSWORD', 'gerbNje¢r∞j≠3&7');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
//define('DB_HOST', 'aleinmobiliaria.db.6510057.hostedresource.com');
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
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'c+&%~|UI`T/3vEvAg+jHTaSb1G}a?.[WwJxg /??jI2yrR}jI4-flE~BcDuA,>^h'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '_hn^{4N_)*-fw,p WAL%#Z-WI7lc g#L.|.]Qk(~nfLow+jZk;!9bzb^4!ka>/JK'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '[,?/4Qv/Ac2erp`e1Ru*`9to;l~J+Q4]._EM.Kw-wT2hMz3w1,nN`P5(9hqW<}t~'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '+8#m;V~Y9;|jUNW9Smx;$~mL<_cWp`sW.zd&<ZW |47FYo=S):f[|I>_430}e-E:'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'm22+k^-t#e$as*!asoYCi.NTPJY#0--mFkvUG|pTbQR+-i%03%4X.BNHQ9xS53!7'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'V{=Jm<g-0H%wP;3VTJw6(-f@T?#Xe+>frGgW?k^rEQD3d_s>chjsM-OR%Wq+TNA/'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '/o8Xcj1i(|kYeu;[+QEN1)D-tPP@f>q0&H!(/qZ8m|H_YY`)q3~8+j9:kz$=[Pw|'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'u1>c_YEK:%l`<D^O. xrLLCM-,g7.kdli<U<;0q$*kYk0Ph6k|Y^oD0w*^UttS_('); // Cambia esto por tu frase aleatoria.
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
define ('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
