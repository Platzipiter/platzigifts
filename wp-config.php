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
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'RAh#ti~#-|Wk:aTQ:Zp[GR+>BJ:FnC59br4s%t)u_}d}1#DM(/Fr*>[::y? o5h2' );
define( 'SECURE_AUTH_KEY',  'F8,q?JDRX/,;IS1NQ-t9p*>tUjp55vE{YJXX}c&r82CIu4odhTV(ebWCD#20%s]!' );
define( 'LOGGED_IN_KEY',    'tREu9TB[F?;*&ZGuP%.VK5p7E#BwMT)TX&fw9gPLTffjq0Q.X55+c{ hKs4_.Rm*' );
define( 'NONCE_KEY',        'cA81&DiQ,qi3BQ].v9/tF$S58/uYI*7l!k0#$8~,^a,k<tXgi;mK*S,fzI4@BRX5' );
define( 'AUTH_SALT',        ' |kx:$y/wQgc;evohOs+t$}AShNsHPLHp6.6$)t>oFU15ob]OY(s<3Q%vj^;Dg[~' );
define( 'SECURE_AUTH_SALT', 'Jb~t5fqVxNElH1PGNuWr-kIEN%01G1Oq94)F5;nbn`yVLikfg}!.(0(Slih6!Js,' );
define( 'LOGGED_IN_SALT',   'L:.Ot@iZtP:uE;_#]Q3%DGEh?s;oddSMKr8MDx{kk9g<T[GVo^(9pWe@491wzg?$' );
define( 'NONCE_SALT',       '(J^;7kYhaM)19M+sLsirM>Tw]QtbPQ1 #38}X|<~P| unZ;I~rxTR/>=dafP}rY)' );

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
