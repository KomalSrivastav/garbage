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
define( 'DB_NAME', 'w_school' );

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
define( 'AUTH_KEY',         'yBisxKD;pNR#DA6#uj5fv4:c{IaR&VtLK:8NS|.E~@(<MnXfK(rsU:+-OIW9pG*1' );
define( 'SECURE_AUTH_KEY',  'Db~mB|56Ko0$@u%5M=!Qksv50yZ7e(}ov^NOy}l5r=<O!n0{#_~j:}`F.t/@^J::' );
define( 'LOGGED_IN_KEY',    'qRb;?$~ZbPyt5QrTxr7b04gq37|[u@TPp%JgG ;U7T$%xZNs44p}$>i~oNMr/P2:' );
define( 'NONCE_KEY',        'IR&tB+jP224i4G5d|U)%Q)4N?8AZ@iBqD9&ex5.iR)8eKQJ_2)@h.qpED{LiHl:1' );
define( 'AUTH_SALT',        ')5G3nvjVYZ8OM@H+S o+,/4Z*;V.EplZsZTdV$)WOLx2cQZR#_nzC9;~)Bxa:_lZ' );
define( 'SECURE_AUTH_SALT', 'atqeZ0i6gwVK&%oi{Fh*))pH;-4^;T$Bpomdr25[V3*wY8{,iwp;u@25dz&cE$LI' );
define( 'LOGGED_IN_SALT',   'M!djv%~A=@DEJ1@hCDx|&8~[HOf_54~(S#AU*_TO,ozxyDXn<nZ$?v_Vs~CI!75i' );
define( 'NONCE_SALT',       '.K9rrdecFXIJ=)wP929A*d|Z-YlGPx{{ <`+RO_!in@<.OE-ASPWTo{jKlB{?}gu' );

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
