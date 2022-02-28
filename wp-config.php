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
define( 'DB_NAME', 'deepblue' );

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
define( 'AUTH_KEY',         '1R^Rm^rN>%Llanc}/~tYD.,}4Ds6Qx2BkT,k_wZRtm0X7|eBaHO9B#sJ-x:jW6np' );
define( 'SECURE_AUTH_KEY',  '&52F3qDcrqt/4&6cjQ9irx[6buU9h1S26-41CX* tAub8o_7pM=NyfFxF^!|iL#S' );
define( 'LOGGED_IN_KEY',    'nJIxmK.<WwcP(61-tzT0,T/^,.GSVGYl;/VP^r1ygc!kDK^ys#WnKM 5] ]Rgrx`' );
define( 'NONCE_KEY',        'PSasadF+bnv?hj)A4F4&8?AIinpQ;/SSs<!UL7o C8/Q{^+Q NV^7h)6CIfs;PQ3' );
define( 'AUTH_SALT',        '!8(AUygh3CJGqr~vU6?@Iboucx1]Vd9^k.S(%% @)_@S&{y,As>6hU!Y~Ke j9oP' );
define( 'SECURE_AUTH_SALT', 'G$!D@IxQH`Z1g.u#:P=dOH+u^fBHd0<ZwBG5h0[}Kdhcu,%j%rOI7kOH4Y/Us)Ku' );
define( 'LOGGED_IN_SALT',   '~#}4uBW:oOa>o)fMo{(C{czgn5,6kAIX rkQt1tk]T@}&C(A_tg9xFL2FoI3P4Bg' );
define( 'NONCE_SALT',       '{6n1lQNskO348,hkD#U6M{c34B+!j[M/+-mYWUitgN={W@tm0xqA-IgyHjeD@@j&' );

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
