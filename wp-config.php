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
define('DB_NAME', 'wp2_portfolio');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'Fnxu+$x4t;OS)D*AE%j*:*4Xe9BM<~+H9p|<[9{U *|J40bnJ70d]<uTg]2y*!#t');
define('SECURE_AUTH_KEY',  ',-3)<8R+@fV:CP-pXI}AaSJ)F4w6V0Q[*-Lc|JRfX!WvViQ~ghk{IoelfRog0gKk');
define('LOGGED_IN_KEY',    'Z2u`e`($[`ceKa|7dOQe)+G{YOaG^DkxEG*Og6jrR*zJ,$H:=GB1Xju=9$.gZvE.');
define('NONCE_KEY',        'Yq=/(}j+|NZ`95g(pQ9VjU[~yB[T` Bht6:7X_yP{rFgT{S/_z`6:NK~3A^9_%yG');
define('AUTH_SALT',        '(jSauk=/gAh?WyiKsD%d>/LOF26S:gO1?0JE=ug]*`D&;1{3IT=hfgJ7CXQ3wyeY');
define('SECURE_AUTH_SALT', '3^bM]Y~5[#aH[LgDb^</sx]y:b:1dlpMS3]O5O@9< HQ;DI`&.QkkPYGtp&q]0[&');
define('LOGGED_IN_SALT',   ';O$!yg/IN fffL=dNSWt09%c$dAqG!/d;5J9&H+TW/]-6V-uwF)ywNzb=Y_]-[yp');
define('NONCE_SALT',       '6I@0:fON<)}9T(m0/|+2@Y=(Bl7w60>)a}][Vd}w1#AqQu&Ppkos#Z)&{IUe?^ed');

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
