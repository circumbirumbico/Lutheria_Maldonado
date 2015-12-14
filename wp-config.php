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
define('DB_NAME', 'lutheria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'k/L|b)khhm;%96/}O~1/WkvWXEz{z(NX6B_wh]/pPX-pTpZoB);GI5Fv*eSHoHNt');
define('SECURE_AUTH_KEY', '={%C`pzAs0?#rye.lS5kBV Vqc]7hEUYmvzK0,d9t389:>Ri-|oG^f<D{YU9v,e;');
define('LOGGED_IN_KEY', '8,g/mju;angPdwZR>,CPevjLM$i-<ma[tl&3A.=Di{P|3GB3DCBMWA))j}+L~Hdl');
define('NONCE_KEY', 'OFaIczjxc5jP .pe:W9DW~+]aeSOI*)Y}H:3?SZRYJR_ciw,hrVXEtM^kQWU2x A');
define('AUTH_SALT', 'g^K}y+23Mt5+T9!Y2r8$40=Glrw G>V+^S(J7h9O6o#Pu-7j0Xz4P-w:Dt:D& o ');
define('SECURE_AUTH_SALT', 'v`Yo>N}F]`ZQ:6t,RjCWw/.]@/D`0GejlECnd8/R[9)SANnIo-m]D&sRuQ@LJMMw');
define('LOGGED_IN_SALT', 'UO-9#Om_(^qPZ3xWV!c-_dPTnmJ$T-^zOgL;:~g*B7&;M3AEr jEET_wmN#^##RZ');
define('NONCE_SALT', '-S!S:xN?Jy==Yb$pDQ-{iS|d6RhqecZwA6`ZbTs14^4X(7^2H$Tp3%@D&i3@|36d');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'lm_';


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

