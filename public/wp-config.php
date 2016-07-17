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
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ':D]vI>7D@;DBQ:yzpGqHL2LBK;JhCJWgp&/aj3lz>yrr|~z(98p/apOeP]}#>zyx');
define('SECURE_AUTH_KEY',  'y9!TN)Z&!05UZhK~1hh747/4;eMb!-ODPCGQf^8Yb:dKD#zKd=bu,YMas7zmP/2J');
define('LOGGED_IN_KEY',    '[rPj:vijKHEn,_hPToz_e!lSdJB@9#OQ+BvZiKZMsY4*6m<h7(JT;R|J~puDjCY?');
define('NONCE_KEY',        '-;LS,t4:)BYG|yZauL^Onhz=#-z7etMRE@U{GP.fK9l%N0eMxa Iv/pOui%9.l[d');
define('AUTH_SALT',        'ZqM$SqXX/=K6)Y:S2/ScWz/y_k<9Xc=2hLAjCkm5jqe?f1jvNET<an46)ip3c0d2');
define('SECURE_AUTH_SALT', 'Wkd..4s>g$nb9MV6PfH#?d}bS]l67[;!EE3<$Ml[Sk&QVo]J>kLCeULWjCGX lS3');
define('LOGGED_IN_SALT',   'Dko%0WSNz1srv:c;6|L#gQM15ccGp9;NnJ1m6kY{sRlH2.^q;(F.*!cXVT)#5pW0');
define('NONCE_SALT',       '.r)G-!Or:]VT5[<Q1AsijiudYH)78,tLmWA8Y@sQcwJDD*m3t,ksoa%uTc}2%^dQ');

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
