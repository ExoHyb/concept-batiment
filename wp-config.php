<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'concept-batiment');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7kuWGH<+iiiZrMk]a1KqB)hz&mGQ!.=Q=B0f+f!hiAn&/z:+O2Iz;;J1z9z29~Yz');
define('SECURE_AUTH_KEY',  'uDC*z*6 #EX.1k|L+nhZ(FY246sar;da/xwJTiw7}Eu1tjifN]I`r&.I9Jl(jU<W');
define('LOGGED_IN_KEY',    'i+B$UWF2M`h%?^jKO^,U{FO,U`NPvcR}p|yf[$w?MTWNk.xyzm&ZbaP5_Rj|a`La');
define('NONCE_KEY',        'I `Ai[)P(lrh8#oWKh{-G]4&ig2^/f/G1vopx+{Hr@4Pp=}H=bTK:wmkJ]L0_9?^');
define('AUTH_SALT',        '(<(%6cNL8z8!WF(/nr]>dq~0imEuRv8S8`#<:=wk {~M*7+*KFW6wciy6MhPGA(T');
define('SECURE_AUTH_SALT', 'W1-tAPR-GecQ|i`IlObDbV.~jt5vVuos6N,6r%s7W)p3dl^{w}uu_S%1j|23ho0V');
define('LOGGED_IN_SALT',   '%?U[&xr0ymP^#73}o-3$#_l328|C Wpgp}WsMyGKZ4>?*tdLuACk}+TBqEx*}~$h');
define('NONCE_SALT',       'TH8*ceUG$Rzn5R|:_jB~<x)wV~g4_U=QHDuRCmqPUjtBWp`px4R!m;P?DV#z7%cW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
