<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_fisiofit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'pX^kh( -oKBAy~>w/G+h/WHqtmvxFqvJ5^+ZypFTT+*@IjT9 ZL!,&iq&$W?$;eY');
define('SECURE_AUTH_KEY',  't403~W!951pF4D*,1J(cZw84_R(<V/A(g-..|i|W`[qe:RJh9Mf#.qVx!d!Y`9[s');
define('LOGGED_IN_KEY',    'E|E c[]o++)q<,f*S%_#A>W)[/y=*av21=LA6HLB1`e4C=vX9Qa&xZZ7.e%G_s0,');
define('NONCE_KEY',        'vt!!+Wp+:96+KsD*hWvmu7-k^$6G>b;=h!2?.{sP; aAmguvzA_&M-Zo_$!{J0U@');
define('AUTH_SALT',        ';(7}G9z$8+zc~{53Mp#@{.%4^)hejruhfIEMC;@BsJB&Ep_D?8IRZ!>;PzCo.1|U');
define('SECURE_AUTH_SALT', 'oC>Bf,`ABpp;J1kgCD9%^MAdTVKa}9@%0@UB6+Z@[ @G6zJMU (Wl>c;DPC$;:$L');
define('LOGGED_IN_SALT',   '3ElFQ.EqT%-lY&az*II}PlNZ!9+vcng*1zzDE|XD*P=+,R]Xr3JjK^gB]t:B:axk');
define('NONCE_SALT',       '_y`G|@8M0SL9.6PU9a=i]^.kK()tK[I-+UCKw<9C!-KK`l|fL|+9hU#xZmUiX KW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
