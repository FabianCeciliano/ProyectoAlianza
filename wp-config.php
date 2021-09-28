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
define( 'DB_NAME', 'proyectoPagina' );

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
define( 'AUTH_KEY',         'CM/3Y^frm#CQ#NV(:sXtI7}C;!$ 1P|E}$7|Tv5Yu.[z%:Ol~ozJK.@y(4:>&`.s' );
define( 'SECURE_AUTH_KEY',  'sKgJL<!EigT&?g4Sx%Ndthsc_X:#jhk8I:LpeDE?ZDD@Kd#g06SCd(B$(;r;!+m$' );
define( 'LOGGED_IN_KEY',    'iUB_I#5?Gm;vDXtxq=F`n^_KHw)~(]e8QK.a$zrnrvNK,dR<<&`iEX9p]/)GGbG&' );
define( 'NONCE_KEY',        'k|Yvu|p_iG e=rhS)TYgxW`-87bW5boLMinFF|?Lv_<M[^``n/ NsH&vDuq,!FXF' );
define( 'AUTH_SALT',        'K^C/D^8S[{ld*y{6`pbiX=V, yHIK:-Q|P,HAUA2{Z$V1X^<+Qc}<gvU%};@YN=4' );
define( 'SECURE_AUTH_SALT', ' W)OQR9nzj=>7*;rWpcL+N8HhB)*a>oy:~dY>nS?dvhA7S&.sWBqO [X@rS&5||e' );
define( 'LOGGED_IN_SALT',   '/#B.I5-r.*:ontm^=ZcE!:3:3MA6zp5-`mw_#gHPr^^ML _x(eQcl5=e!=MG 2_Z' );
define( 'NONCE_SALT',       '<]P@sd=RrP1Ls^Mcu9czx.a&Ft}kcUM0d7HD)+|(Fgb YREwJ+s57_u$K%~)4B~2' );

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
