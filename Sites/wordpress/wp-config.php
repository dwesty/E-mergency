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
define('DB_NAME', 'emergency');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ad}r-O:,(swg_J0|ztA>[RGg_5-,M|_tcj*!0KCBTqj,`BB6VS]qs-tcEW_h:(n{');
define('SECURE_AUTH_KEY',  '@f( d_Rc}^+;g3c|)^+Ywc AvkX%RzM8RwRK[YmBYIX^N~`[Q<f4tvQj!kV-tu]d');
define('LOGGED_IN_KEY',    't~][|G+Y|4=42d74w].J>v4wh|Rlz0K&FvA4`b=V~]--VA9*yegGonL^{?|v}_d)');
define('NONCE_KEY',        '7tUhrR-j3I*Y`1QF1Ys(;Ew94F^m~P]w2Eg)409)/+`h/`aW/rU-*v&g-A^218z-');
define('AUTH_SALT',        'ogKn5|L{c|3xnSGDChY5j^-oByj|!Pi79N1G@T&!>d.s4*Up+n,kQ#++B+y3~/mA');
define('SECURE_AUTH_SALT', 'aG+J(HTrF,cyugyk.^aTTyBg94|^OE.{> 8tM7jXq<nnjP1Ve:HRu3^iTOF-yx3Q');
define('LOGGED_IN_SALT',   'YhEr$o]yq]z[@m*o2DT,?3k3T5~4]|R3|td_hAP6~Zdpgb2V8h}CPiewo=i_vn;Q');
define('NONCE_SALT',       'TjOgaQg+{_NK?9xiwNsX}mKmgOY2h)ROt@rK!!~.m0W>|1xv%3tfG#cZ9,f0HJNl');

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
