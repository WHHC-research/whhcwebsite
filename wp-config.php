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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(ra=9i [489av7V=Q3n>h{-M7^a_4v1*%XNG1aI}*N|{|:4P!:NWC?srp3-v{1K{' );
define( 'SECURE_AUTH_KEY',  '#m<0E~NSlV/>?pAk$w>k>Gsw[qmq?KeSb##X,*gS?o0Ar)p<vp?;@LgD_bMTHW%C' );
define( 'LOGGED_IN_KEY',    '4&xI(l>VdTLoetv<KuuDh{I5$m4^CMX5s.(LBt@oXfa[is~<VkD{ZF@c`;GItPat' );
define( 'NONCE_KEY',        'Z?n~_~^CZn${mnLC`zZ2/aUuUCkortqw+>x^_DHBX-/?~T]zS`Krm;O!]cg|tO7o' );
define( 'AUTH_SALT',        'tz2_Htg?rl0B6a5^FI%JhU0)TQIO8g#/tiXmT#~fBWvx$$9v%wirqa)7R#1W}5PB' );
define( 'SECURE_AUTH_SALT', '(vcr?IdG:Vk*H)H|oK0-1j_U;3Nbf?z(R!~d;)_@k=b,zq}CcG0H;JKRV,u;^}!B' );
define( 'LOGGED_IN_SALT',   'Wx}cs6$wV(F:,l95jnv>e`a9ezc)GF&@250v;M_c*NizE3w)W_zaA%iU:E{oqu7:' );
define( 'NONCE_SALT',       '{q5D/;:91 KT/=Yf&^jLyLK:y$Of1ZnJ-qd$&-;j/BjD<qt[:.O+Bqml)+!Ut@**' );

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
