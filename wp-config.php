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
define( 'AUTH_KEY',         'O(l1}Y:H<`^(XX1ST<3PJ_^dX(CbA7g9V].nxXXAkdC0j(neZ`hkkHmdUX3W?T2`' );
define( 'SECURE_AUTH_KEY',  '7!k#3Y/kIdWWJ+:uKRZ.mxHv[@O&k$U9m(Fo>_~:OM;jG~N}lae*~St_~ <:3~*/' );
define( 'LOGGED_IN_KEY',    'OM`+%ks2nH:u<NI;j=G,ehGobD>WnYouGYI;ltHF;WRrZLu|Ee[<jqUR09q4oGAf' );
define( 'NONCE_KEY',        'RnTcO?nkS:hW5wx!c,kK{nM3m?~i@9CA{+aG%IxyHL?%Z^][V^02zsJhMl|2])_n' );
define( 'AUTH_SALT',        '(CpYuh~A /^9%(W)+2lW26ya45/e!h]_6k6s)PWdzi.rb*yuY*;@dfG7f&oG3{p9' );
define( 'SECURE_AUTH_SALT', ' YX2vY`4V`8(uQ.z?jxdUZhpG^m^://N(4K `yu INaA[n:i~,5wR*[#sY{0?$=L' );
define( 'LOGGED_IN_SALT',   'JPMh[V;~uZ_r.{~#:!y#}2Nq(WGAGkS*-cSt:@[,O^YazoqK4{m6z0[Zq#4?`]kF' );
define( 'NONCE_SALT',       'h,^}-C^A49_h=U=QkXd=}Y^9A@JTv0xE`PIe;?AAbF4uZps/O_<?aR@;UXjty,[T' );

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
