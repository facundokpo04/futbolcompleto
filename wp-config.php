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
define('DB_NAME', 'fc2');

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
define('AUTH_KEY', 'f@ft<wYi:-SEsw^_r(R%a*8s=I+EVZG8 >>GmgzVb6Ub% d{wQc@|sL7H|z{dpX-');
define('SECURE_AUTH_KEY', 'WS>}W3j>`>j*qosyDF+:aZAMI|+dFj3*.Zev4ndf]beNsMqG5yil{FN:=%x`^+)A');
define('LOGGED_IN_KEY', 'f{=A%fxuJFM/;/DiLRg|+Urv6MECZioIFi,t-9(1ou``E7yFz!w4QzYJ[XyVvd^}');
define('NONCE_KEY', '#@F|/N6E{c7|sJ]G%]i?SxwA0-/m)$%_zb%,V-s(qGFfdJe+gq_fiE,HzH(jZ%U?');
define('AUTH_SALT', 'P7-jb/gZq{Q|HG[U>_!ds<Pds?<f:;;Zel0OF;2#Q}sm%brDf~MQt^dGc)qm/R93');
define('SECURE_AUTH_SALT', 'Li^:AK?{8XRM=,@uTrCwdEkJ7>]))P(RHAdxp#Bh0dm}A_icttU?&S3-)O:z?uJz');
define('LOGGED_IN_SALT', 'Qk/g]x=)^@,$?*(0ny?G,W_oxFKYzL:Vscfy5HZnx9]RBz<f*b8CmvSR..I(GP.U');
define('NONCE_SALT', 'KEKWd?6!n6Xmk<tIi<po?iHfN<L%.x4QeIE*G-eG^m|Ody=N8=RUui/(NQG0GLcP');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'fc2_';


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

