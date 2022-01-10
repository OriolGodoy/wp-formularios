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
define( 'DB_NAME', 'wordpress_formularios' );

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
define( 'AUTH_KEY',         'aU*0Bp_nUh^J9IVGv2n##]{NrpV6iN-Bo)&k=`NmRDMDqD64jeF?^{ *XFHx|QPE' );
define( 'SECURE_AUTH_KEY',  'CuNF|D{Tc(YL+Ry~CM v u/(lzxGgH0wP0}yM/uoBNEPt3;hN5`k)}U=@.6bf{Dx' );
define( 'LOGGED_IN_KEY',    'ZZF9|arULMqWlOWA-Mt$[-2yT{fYGIXNR3iiSfx$1x1`@;kL<#(m{gn7&o:oo~9j' );
define( 'NONCE_KEY',        ']|&EhOMwAes`1fpD9I;h5.f%9$&h5K?D6Wjh>}Vs4554_f`DFeUWT<)d18Kl(Ne}' );
define( 'AUTH_SALT',        'z }% uYgC01~xnx;pj3bF_R&Rd.P&SpO^qHX~^#omywE=m9N#Q)zR|}xX7P~*]n)' );
define( 'SECURE_AUTH_SALT', '^FjTC<F8nF&BWm|TH^gWg9UQ{YbW0M3!IZc8veh4FEPh>PO4c[ykC$;B|iLDg/8*' );
define( 'LOGGED_IN_SALT',   'yYK5Y`!NnV4%7p]|dhuIhkT4Vr- Qyus}w5j?zcSTY2A,XVlu!w;uj7o`}WKyP)%' );
define( 'NONCE_SALT',       '$X:a)!|0G>E7%I6aP=)Had2h/, BP6yeFtkP%`YhN5z9Lc!5Wdf4A%#Wh9g:3?Cc' );

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
