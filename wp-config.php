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
define( 'DB_NAME', 'wp8' );

/** Database username */
define( 'DB_USER', 'wp8' );

/** Database password */
define( 'DB_PASSWORD', 'kgtQE2A(mHHnvgZ[' );

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
define( 'AUTH_KEY',         'X7gH_hE-y|Jww4TW3T;10jqaT~@^yT/sQ;D,}u}>E#)Xj`9M-{EPR_H fUQSmr X' );
define( 'SECURE_AUTH_KEY',  'NE(G^d=s}1Y{m9rJZ@P[Wr<<qsyu6rR.SJSji&qs/vQAxYkk6Mw=^JfT(C-u!OK:' );
define( 'LOGGED_IN_KEY',    'D>A*v_e#y0_OZ_UhRd>aZ;Rp9%!^+fQL$iD1G#Ox:GxAax8XDcj}kajtU6KNZCq,' );
define( 'NONCE_KEY',        '@}%sWW/I(5Xo*I@`T&/I9S`^P,l$NZ|uM}jM|%m2}]-E-xYX9]R6| 4iKlWgD#?f' );
define( 'AUTH_SALT',        '3w,K;}o%af+h$Hf0oR6;(A~ok}bIVc4C*F/d;q|o,9<Kx*9N3j,ltF^bTm.1hL+Y' );
define( 'SECURE_AUTH_SALT', ';Ih1#XA=2UR?Ul:Z >,s=mXUECvG|y0iT}n=:2EZeq^,6pNAWP>8|2uvwz,KEk%U' );
define( 'LOGGED_IN_SALT',   'Dzm:YX7czA4aghlm=BY~9KNi@|1a[R 37>tJ&Pc~)0aY;JqPWt>8WZ|%_Xu5QdXT' );
define( 'NONCE_SALT',       '@E3QCU;t[,mQhk+f.5Q9g_~OcmAp-w@x1/;eVMnDZfZ<ZLr;x9P#MaV0YE(q0C.r' );

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
