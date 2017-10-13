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
define('DB_HOST', 'portfolio.dev');

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
define('AUTH_KEY',         '))-6)9Wv*XV#GaAL%L,f;eq3b(fW[-%%]^jDw9q#rO%QfK>_D<C78$*J(i@<,,.S');
define('SECURE_AUTH_KEY',  '#7}X}Eb!7Y(:A<V$7bKOx~q_lKx)Tr!}:i7G5PN%m#-x&v5`{AGqTJV>m5:.1q&#');
define('LOGGED_IN_KEY',    'A1fkx5?~Nam-(fZDq2<Rq,{e(RJA/:sp%q}A%TJOu-Z:tA8@nZr,T{8.zDlDhV>w');
define('NONCE_KEY',        'g5K*:I^%4H!-,^~ IdNv19I~ .yoHBAOu39cCQo[>adD0r/-d*~M`bePFtKYRSex');
define('AUTH_SALT',        ';L*;]rcC6k]=2Y#VFf7@jeY8x8>D<Do kiV+ ?=@u~sw@8l)7G8c=3K#6AFL53aH');
define('SECURE_AUTH_SALT', '<M}[4T7orR$5c/fe5|hm-qi<GF>~F&YWqWn?1L&mptHWAy)04 2/5-)2qR@~c]y&');
define('LOGGED_IN_SALT',   '=,=e(/&V|bH|NWx-=y<vR6d{Jmni<B_!t$O8)VjbS^4EUq+&nA)!$F;q.xt{ycmF');
define('NONCE_SALT',       '`1/J,7n6Q%rj>ht!W+tewXJ*`,P5J?{a.7mI)la45ClSm4Spqp^#qh.}KlcT,wWt');

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
