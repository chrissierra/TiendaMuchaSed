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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'chris');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'jazzmaster');

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
define('AUTH_KEY', 'w<W|{aQFM!sZsIT$z22qeSrZ/%_!OtR&aw`qXX{l &MLw260r%m_^`^]Mq^[tf~g');
define('SECURE_AUTH_KEY', 'gLX|PvtKU}&ptkqJEk>CZ0F{@q7ew4-jP*x=+)kf}dhoUzITBp3-bn.Y Dp+e.j%');
define('LOGGED_IN_KEY', 'kA{w(<>c{~KFF-e.n:ro2E{=a}NZ=+EzqF$ZzHKJhywtVF*& /.SFh|T?s1?%}|v');
define('NONCE_KEY', '7AUWC|3+N#r?ZaLEg:8ch+=N7J^fc=/]hW@=)xVH[6TyPHqTA+6jhHuEyqlIOYCv');
define('AUTH_SALT', '3kb+`-Tl6gteZn{<#i|CMwZV(Tv)!}ftsx[oTl&];*Pu>er?bux|%>{?n/UNGRNp');
define('SECURE_AUTH_SALT', '!loK9h#,EkeiiTxIn[B$u+iiwVWO[TV^+i]F1%?a_4UP`wYa`Asd,VO:R`g_IY9L');
define('LOGGED_IN_SALT', 'XvL&~|^LRT]UJYaxJ[M:l/jQ)En8Iaav/$SjK!o~Plg|ZsQSQ]/%NZR]Hf4SFMa9');
define('NONCE_SALT', 'gB96Ut7dTt%*`?[JrZ4=;=#AW3gqy1m>,_|8(!Bu_i[CUzfyMbn 5M:]l#F}+~f0');

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
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

