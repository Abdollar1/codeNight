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
define('DB_NAME', 'amasapdasty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{X(o0]t_E&Qf?$$0+vXG|E0g2M5vZl| 1yqcU6=5f<V#7;,j] {]ma.+?S^f8P22');
define('SECURE_AUTH_KEY',  'v2:#k~Em9v,m)bgd)#:HZ`d)^(e95#JM8|BMow^~Ps?q9sx{)2G;c$83;rLYp$(}');
define('LOGGED_IN_KEY',    'k,N|#vYOCF7;Z|?*=l_5XCDoTM3AqX3TK,ym^z:fb1.d/ t{l:rYY=c!cCF%6Z%#');
define('NONCE_KEY',        '05Ho)!o>PG4Lh{.hefKr$8;22B/{fkHQT5`PfFOA 5Z~X-%$e2AZQ+!thI)4a{;}');
define('AUTH_SALT',        'rUZrueH|iesz)1@x> w&sjYx)vEU+`n^EErFIUMQ5u-rz&IVR3e8N}Ev#$yl|Fe ');
define('SECURE_AUTH_SALT', '!{)oz0+F}n7{XW#G GMumi2TYY_)x,fzq@tcTf{]2q|; Z|`Y|@PNDG9nBp/6!Y,');
define('LOGGED_IN_SALT',   '+& mbr2ll*i1U.kf(k(}$ HYq{m+RQ<!`aI9zAS[rDBHq7TwVcLN@i`Tw &N>drf');
define('NONCE_SALT',       '+*q}5.!W&_s1E^19_>n!V4L$wZzYa0/]cRs-/h1Z.`Jq)@:D_^lJGDcQ%h;V?nY=');

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
