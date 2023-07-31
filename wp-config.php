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
define( 'DB_NAME', 'PLANTY2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[SpoHI(zJ<[D;T,ejE)zw7l2!`P7znZ*^j1c1#+-NvH5?=H$YP^CQjkUS0U+Ej{ ' );
define( 'SECURE_AUTH_KEY',  'xn{.DD/uadE#t8TEB_~|c;o@M[6yo8S$+~:.43U@.Kxq$@c</%1Cy)vD`b|R!m*w' );
define( 'LOGGED_IN_KEY',    'YR,WYjDsmEoGLjdYhst.rHlT-qkIj&{;33*.CV_^!{3I]#X]4~!<4<(lfMZ*azw8' );
define( 'NONCE_KEY',        'Y[1`51lr7[5kN^c;0*J$Kb)SWmLcdbQ&itzlvrEKK}.P}9@|?im/97bTv6#[Cm+%' );
define( 'AUTH_SALT',        'zB!gWzkCh0iE$u&{;V~i:H;$pv=+ZC0V?<_ Bh}n-T&hp:3#tQ><u%GMS|r~pW6:' );
define( 'SECURE_AUTH_SALT', '7bv&Y*U9<N`@xXc},`OW`bYuS:gysgj {`Fd)d~>zlMCM(2~d]z&ug[R~rsx{!c}' );
define( 'LOGGED_IN_SALT',   '|iOA5CgBb{f.z{#C[{i~Rq,QqaF=f#EPn%791X6Qo^c$N/C+u;*(cLOqvSkt[2iW' );
define( 'NONCE_SALT',       '(?|b[W{Cxfo0;(ME%R|l@rCtMFGFlWwF<H_iA{FbA(5_GZhn}mS?3h:2CaSuCU{,' );

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
