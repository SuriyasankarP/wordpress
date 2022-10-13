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
define( 'AUTH_KEY',         'kS1:R_mi7{w5Lt|u]Q){]!aTg+LAlO%2&B6-|Qi?oN-/h*m~ERoUm8<Po+0K*=/;' );
define( 'SECURE_AUTH_KEY',  'm>6e&X268DT&W9FS6lWq|yl=>T))HBn$o-gip%{K!-:K)iP_wizp>b(Zwq`.AV];' );
define( 'LOGGED_IN_KEY',    'uMIdsZi0$Zx[I8OJ~C6$]~*DNnco)bn6HcUu&eS.MF|7z a?u-*aV_Sz.oMa}hA0' );
define( 'NONCE_KEY',        '%yO_oj j Cp.;#jD(Az;EwFltrD+EgG9K~h`yW!:,MyzmlZpk[#ch~QnDpYM4d%D' );
define( 'AUTH_SALT',        '%rg#pHGL?yZ%-F-So|#lu7fD1FP8^MfzzSrmC_vew(X!gF|}o=QCp.]=EM#2| *1' );
define( 'SECURE_AUTH_SALT', '{$Kd#,vy*a}yER0a<MAMybTpnOGuO G0!DB>*~0u^yon^l89RCEzDpO{ycDwX~<|' );
define( 'LOGGED_IN_SALT',   '}Rk<Zw(yBeQzz/46dN&9L]9ZpRIe=]=/op7yH(MD(S/Q~@RaXm2UVsajPi)<vr1Z' );
define( 'NONCE_SALT',       'W&%Jg:DN5[%g)Qb1hmR@DP-m=)x48!i^u%OaN1zpRe&!6}+!At^Oc=H#R0AI)_[U' );

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
