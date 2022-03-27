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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assuregroup');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'NXj<tf1(M<1mAw{N]MdYRS6[Y~BP8!;q8evt26w]u7Zs9&DjcyupEUG-+g$kF0zT' );
define( 'SECURE_AUTH_KEY',  '-EnBw_q(3ne,[REMi1Jy@8^_aY)>0fni]OXO3:]j^*T7Uu:@<3x22@*5JPC7h}]t' );
define( 'LOGGED_IN_KEY',    '5r0%:H#S+Zpv$?^@$%;o.^6M2&PIN`FHd^nEILk1$<^P3O/?0tBn^f*b3/.j0}-h' );
define( 'NONCE_KEY',        '@;nOMjqNKqtcMd?+(2vA3HE?=b<?6`JCybZ2&~/skI8h(q*OnHERVQc[H?MT}M0/' );
define( 'AUTH_SALT',        'v?B@^a/[,(Oy9NkG)j;AcX/V+GBB-cjKSef}y8fA1.j|}|CBr@lqgax6hyoKB{ss' );
define( 'SECURE_AUTH_SALT', '5bTvfhX8WDkE%.7qZq8m9`ul8F U^RZ;U*?r SQ_h^h&N3 _7n)E?[+f3m!p&BR(' );
define( 'LOGGED_IN_SALT',   'z$ T%kT.HfKTa+4CuRi|b4Osv8#98R<B4@jf_wE+Wt0_`QAZ6^NTwF%Py6IwnOXQ' );
define( 'NONCE_SALT',       't-6=q;TVSj+!B~+5$40g8fEotpl8[hyhGWjAc~>m&<%SH4SSoCJ:[IcWd)|}mb%p' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
