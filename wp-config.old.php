<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'platzigifts' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', '192.168.10.10' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_spanish2_ci' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b.#DZ^>`&f!%;{>Fq;lb>|,--Fx(wDgSY#4vEm [%rYR%[YX kz~S*aoC}D^.|5I');
define('SECURE_AUTH_KEY',  'w_-EP @>=0oSwxpE#//r+f[w+|,| QWEfHg>}.254f,lLJkZK$:V;uDwq+$PopB8');
define('LOGGED_IN_KEY',    '+=Kg!9fGNSIZW_e.`v&}V-F9gHT5==$+[p( SjLClPzvbuGXS&DD4!4&|F;H?#%[');
define('NONCE_KEY',        '_;f6UIjM^=M_,s^A*N;0d4zN)K8z3%ly$_A-dv-=TDbyq|Pe{$~cdqdIuiyl]+J9');
define('AUTH_SALT',        '~|YT];B#oO n 6;b:VYdJ%-CIed4664(L%OluX~7m3y8k9Ru+IuXK3Lp#P.Sg(:T');
define('SECURE_AUTH_SALT', '8T9{Scz=pyVPm-;A%)m4.>^H-jbkT4:yk>TQ$!>79 <.$@>=xRP:|P+!U+oT6tI4');
define('LOGGED_IN_SALT',   '/,S]lpXnrk^B!U5fdW8!iv,Tw]+a*phq@YNb)w[M|Mz[+g;emO5gPNYw+D9:z{Z_');
define('NONCE_SALT',       'E,-nN3kLio<P@_.#RsDSQiyUy&FKhVhBXhu[nVE<V7B H,Y-;KZyK}>b&+4ad<ga');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
