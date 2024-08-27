<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EDO' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'P4lR:ZF)A?7o+<a:<X_yyC@6WA @y&l)D/>T3&^X;`{+6oLPG0v@y/qx4v`bi#$x' );
define( 'SECURE_AUTH_KEY',  'bF6F6E:rT4Z*>wU<}5}] fqYiS)M/p&lN6(a:mN%CYAdG, [^2X`>36H~O?<X|8.' );
define( 'LOGGED_IN_KEY',    '[W6#dJRsGL(w]byU8 $e8#)j@kgW=-Bu?63K;uv~ O{H?XZEi}O4US/4,Hc_Un,*' );
define( 'NONCE_KEY',        'UGzIn)*H^w/>.X@-h}xyM8860=m2EbE.tG2RXHF^]!?ER4Nhb_=L!cn&WgJ*^NwF' );
define( 'AUTH_SALT',        'xufA>Vo9<Jq42Qr3q7Z!ABiVqL(8}?!,a)v{aKHU6* I~~J1|38YMBD(lVKr;RtH' );
define( 'SECURE_AUTH_SALT', 'Cr4tbkdLEXR5z<Zk);8+A[=v$[uRZkv$L#1iW??84}AgS5EdM}V!Br(WXco3W|Uw' );
define( 'LOGGED_IN_SALT',   'Ue=fi`UuoS#a_D)Dn.,oJ5,^_$bEtg]v]}%V4@N#VDD+w7Av?]{pBc+yd$da-@SL' );
define( 'NONCE_SALT',       'y!$GRqIO}ZjWjs7-D#XE%cJ_vU*N_+4npI,v}YU37KRhzCibsQ|fB$N<`1#9G<er' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
