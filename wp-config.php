<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GAB-DIASPORA' );

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

define('FTP_HOST', 'localhost:22'); // Use port 22 for SFTP
define('FTP_USER', 'nzomo ');
define('FTP_PASS', 'destiny@2578');
define('FTP_SSL', true);
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'M//^UxDx2Z6-m4j?M/=4,$u|f|5>T}W[?<M?nxuQd~)ij*bX*BUof,v:^#MHdo{x' );
define( 'SECURE_AUTH_KEY',  '06A{},C61l([iMVmc*{^}VsLjXQ{p8yg,g8MgVc81*{=nq9A%{k4[OHV-ptMlIFv' );
define( 'LOGGED_IN_KEY',    'd8ED8#2iYn}7^4;C(w|,=Vu|`Bw&(~NASCk[K:eqqgqq}ldm1tVwy?0>Z/i1hO.E' );
define( 'NONCE_KEY',        '.55f.0dhM s=V(iD3Ej/_R(~xo/69jT{zM42p-K6ic85ZlY {*S*o{J)T&Sf(zqN' );
define( 'AUTH_SALT',        'zTk+5> YV$Zl^8Z~-b!gc/*:v@#&DnC^`b7OnFXx[Z>!p_W}2u/ukT8?Z8J]|G8P' );
define( 'SECURE_AUTH_SALT', 'Z9--oJ*<mLN95;lU i!]?0-0<yb@2wW$1gpOgVt`&w`x4&z=k$_qdP@fjEp<H&nR' );
define( 'LOGGED_IN_SALT',   '-uh0[!$`z:aX8:Y)+(z4Hq~=~v?dIcNu(g(?HTQljC,aNeR10)zB-R{kJ^+zg86-' );
define( 'NONCE_SALT',       '1#U-FHkU;Sw_Hd_}G]+L8dYq,I$R}uynNCr7E8})<NCN**GwT3o$!?rso#<ln,)Z' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
