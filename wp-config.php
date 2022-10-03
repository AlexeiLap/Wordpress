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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', '84.201.174.250' );

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
define( 'AUTH_KEY',         'qPZ>;i9,A /lj:mRtyzJb_`T(Jnx IIQCYgUtz5V 7ZuHm&0(6D}Zg-Bfl]_P.^2' );
define( 'SECURE_AUTH_KEY',  'vI@t&N_6`E,D}VxX;Z^C:tbTn:4%bH8RhSSZ./|}c,p6(b$+3t6D>7a8<.zHsH?$' );
define( 'LOGGED_IN_KEY',    'DU$Kce={fj&2LRl+I5o.0db_T&iu*bT,R[Hypph#{M5X_Y?vneGbHgC&cK{]wD_-' );
define( 'NONCE_KEY',        'C,_X|Igz:`I>8=t8~`jS$J%kyB9/Rz!jf/p%fi#L~Kq[}S]FwIX!w{A9#pPQ_>vx' );
define( 'AUTH_SALT',        '`Z{Z(v{ys#XD; yR}SuQE,Y`P*/;)3xo=/mowudJg1X2?tminmj#$JM85e!#yzbL' );
define( 'SECURE_AUTH_SALT', 'W?Y*UNCh8)upR$18<<q.xv.m63*KZ(&Wv5/e:Eabi/lg:`?jg/0X[<mao=Xz<1;:' );
define( 'LOGGED_IN_SALT',   '@2;okjVVBe|$wb!.H;$]0.4? ^0:dzzO$niG>6~Ffm03-7rG0>k5u19D&>5-FV51' );
define( 'NONCE_SALT',       'IYpW4z)/RBXdBVzCInySnKegi`kMo{>fw2{%y!TXtiE-t]5o.=b83&S/]KH^=WUZ' );

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
