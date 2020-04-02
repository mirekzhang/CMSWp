<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'mysql' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fm3dfm3d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p?C0D$Zt<!6[eSY.2xf8x^+T:4?8R00x?2ggqBT:`fuUekP+4q^_E!v:=-~q*ski' );
define( 'SECURE_AUTH_KEY',  'E+mXL.S@ux)-(Fz_yD+E/`G@`MH]521.d3>TQ %+42a:2;+x 4$R]*TB0wD/,`wP' );
define( 'LOGGED_IN_KEY',    ')&^NZA<#}QgRhRVc~-L;`I#Nju7s ,tGU&GyVRSezTCz{4&qL}A{XFUF0tE>ZjZx' );
define( 'NONCE_KEY',        '4[nN0RDU9SX5LQ>RR@P}>EIoMRJIQDt72hK+5;hVMymb&F;9SB/s<E;!B-b~&8R^' );
define( 'AUTH_SALT',        '%a5lnk%|F-r+lrjDLHnL4.i2j3mF)`?8qP+0<tM791vcy:m) #<ZQ;i/%f*2GXCb' );
define( 'SECURE_AUTH_SALT', 'r{r/*]Nvf-P}sE&xYhd8:Nt9~+bx,6#@VdV.yH)<4l}*i-.{<%{_,;Iznpgm=n,5' );
define( 'LOGGED_IN_SALT',   'd$[q%0fQqB]bZ4eK>!);;#m]=B6=UW1VE(nzn>r jMCVUcYli2V$U S_*F6~jKa+' );
define( 'NONCE_SALT',       'D5u7),k_M>!7S942NxIB$sH$Ip2Ruuqj~)(lu~J3M{q4vc]qm9@M:HXkZzStbyX#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
