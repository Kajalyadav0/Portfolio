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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'VQGru2 A@deP4;h;m:BK!BhAjtK5S36%l4GY5` )e1MA]h2e|H#X|_<*n22Zp[Jb' );
define( 'SECURE_AUTH_KEY',  'Kp!|nhv>+QU)?Z[8e~3n[4@@s}o1EzR&Cwt?hIHsKnx@7Pi[1x`L+@Vae@Afw8_H' );
define( 'LOGGED_IN_KEY',    'dvB]y^pay3Ip1?01G.Ki_4go=zv[iLb^cx=;w~VQpv/!pLY~D,;9_Tpz~^r+EV`1' );
define( 'NONCE_KEY',        ']53|cwUWmRL:3)fokPU*-vujq76ioj,T+G3Zq#Tn*Jx1Lf]{b +M[HI)w0%/gj+4' );
define( 'AUTH_SALT',        '{<+uhrPN0g] Pm|AE)2Bn+MWewW5naSy8o7H}}X#2G~mGmfFb9f,m01X8#u98o9$' );
define( 'SECURE_AUTH_SALT', 'zSwB~8R*vXPaL Ea%]<WZ5:lc>X>gi[Q~GHx3K3n+@W5o>izGk>,XdH({5L18Y/l' );
define( 'LOGGED_IN_SALT',   'f$Isb;6_WqiHJ_I^<52F:=v[]d@?1n$B}L{~T@:C9vQ D=j$]m_vXzLu@SYP`s.G' );
define( 'NONCE_SALT',       'q?)lXOIEM1-I7I)`MiwRYTwzU(c1qkv<} v EgT@PYFBbj:kaLhl1pDVLk;+B8{I' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
