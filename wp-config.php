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
define( 'DB_NAME', 'jasondb' );

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
define( 'AUTH_KEY',         ':(uy} d0.<Fk.b/TpzUO=L?U!ShP[dsy4w0!IY*T9]-^Ki`B)AOa;~&`G!v9iGKG' );
define( 'SECURE_AUTH_KEY',  '+N]3kuR#OgMJPVDTLVXVSM>$#ko]|izWNt1jalgE~7txEQ0{W&IcV3#3VUL9DHU?' );
define( 'LOGGED_IN_KEY',    'b^ZB=9y48lHLtsYfcH`vX1Yq2A>I/.Y:wh#v2{ZT7p[[#jzFm1`RO?~I|vDT?)]P' );
define( 'NONCE_KEY',        'i=pjqdrzJd(]CVxEWEKsJkSy!8~K43yNor?MA =/%e$)df*{(p}|zY=*t*ZV@Ux>' );
define( 'AUTH_SALT',        'rx_@FMB|<1 #Y.x2^<er7hv<S,.e]YflW}jv$.cWnQdvid]E(NMoI2=*/?CG>2a<' );
define( 'SECURE_AUTH_SALT', '?IHq--fi5kbB]IGfP3X^<7(W,]0:zd=6ReoGZDPZDPR}n8M!hEF+$iUl-ZX.L! L' );
define( 'LOGGED_IN_SALT',   'ckFBwy?HfU*-xQ_j)pK.0ikTI|)~pF[7!#yLB~|F_?zq(FO<S$xDvfE+`EmRvj,?' );
define( 'NONCE_SALT',       'F?^>M7*-%GQP-l[aTDG5[2e[=XJj|ru~_BCv|}o1IvOM3yGs.@sU1+Q_q~19%5w3' );

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
