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
define('DB_NAME', 'emarsdt_examenredes');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'emarsdt_examen');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '46592855');

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
define('AUTH_KEY', '<@$oZve3m@&@jH7w@o7Zk j3,u8[oW0&003cx-}7n]qi@g,>-<lptB0_*io,8}gw'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', ':b-6qc[4 UE&r6jdBAHc~l84;{+,*L4-qZIZwMq{]Zf6tV3_|pHkS8Spvcb)VM#F'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'CasD0B>-+K0k}`_#2,kjYw7p)/eV<-)kzwUZy,~mww4vtg9IYN-m;IB[|2 -vWK}'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '7<dhv2D%*TByEDGJap~Zv?(g|Umk}i*y..dDpqDh<0fz-_t}Fr,:{kR!1opRqD+_'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '^lk*Zw#K~rho-.%Go$=EhL2_==t4KIu<T{XhNwq`)-_hRB/GF-#Rpj3o_0N,bsr['); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'yr2p`7|sC-Mo@u.[MVvdif1n56mPcPCh9.v>sQNlCKz|o(iHmAW- v4M~17j)p,]'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '<.d-(,h>5d]tlm}1P:pR5h`^9`ZGGV*jL@& T_E9|=|.XvQ[_pTIoG3%,hAwd=s/'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', ')S+^ZmtV/%dpfoJr3Qm_:Tt.3sqN;kW-gMj0Y{h@+[0Coxsk{|K{flWa}H,Y?e 4'); // Cambia esto por tu frase aleatoria.

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

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


