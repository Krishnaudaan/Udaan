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
define( 'DB_NAME', 'Udaan' );

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
define( 'AUTH_KEY',         '4V*mt0Wqw[-7v(dO@QzTkgG!|6hv]Z1gz7CFj16S*61q%2A:|WDPE^ m2}>YFN2O' );
define( 'SECURE_AUTH_KEY',  '=%^~$8 9<D{Ma33vfqVn;3`6~T$a`q-2[DiqZg.Xl=r/rbE.RWb@Lz=_>|FwqF6)' );
define( 'LOGGED_IN_KEY',    'oilE*2jT0JL.2>sK<t| $Blad[;SXz0/>+v/?~xpW:AQBekg!iPE:t!uWh;b:]je' );
define( 'NONCE_KEY',        '210a^.rVf*d7~N)O,]Ux7XtGJHD,1Gb*0k!]WFSq2 ;^?)WdY1_H,Z1^0Vxn[1@C' );
define( 'AUTH_SALT',        '--L`[Byp[- M.6gNgMj&Jr0a?Y)0&xF3iH?/:IOnR`X+Z <1x/!2(W6/tIG]A5u|' );
define( 'SECURE_AUTH_SALT', 'vl5h^{EDW|>NFl{b^kdx~wS^`fn8<eMQ#Z?Lrw.h`A18)`tG-4}*OLT3_VJNB]j0' );
define( 'LOGGED_IN_SALT',   'u3g gB})B`$U?%}2e+c3~-!x@_p|A-9{c@n01GH]2g20({g~51<mxKB*PI7`Mg.X' );
define( 'NONCE_SALT',       'PMQ+i= Bf1Vd5x3T)V#57Kt+kS>sLcHRD_/nQ>~xVhrRGJ[E,Al-CHCK$g(IyU`p' );

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
