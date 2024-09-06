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
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gab_diaspora' );

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
define( 'AUTH_KEY',         't#.bYBi?B;nP=--3HJ0VEPI)nO$yIn)D-pu_{znFC!ht,r$PlAEzX.If9O_*gL9o' );
define( 'SECURE_AUTH_KEY',  '8?rPVgqO5GG<<x .UNBfOF*Go3o@?cA$(*FXSqeIr`+(UOu7%nVLi[AXz1%k_e=n' );
define( 'LOGGED_IN_KEY',    'WMQN<O}`^/xHN6V@~eU`>DKCS[E7P8!BZl[R2=DE{2)>75pe]zy7J=;}?Mr5V{UW' );
define( 'NONCE_KEY',        '/9l u7uuphg7$PP,~cFEa4jOWNKZR&@VL8Zflvv:Ye(%V4a2pH?eAm%g2Bt`)8Bb' );
define( 'AUTH_SALT',        'g}^Vq#8&q,@nNF5q48~*&J_k8g{6u2wX[zObHq?JzH|OB/#t^.5pF`B>/j8bNkVl' );
define( 'SECURE_AUTH_SALT', '$<0-|<`Z.HwB1b92A,ja}6k?crms|8<gh7eq:0!X5vI97hM:%BUM^FV$nf- p5Xi' );
define( 'LOGGED_IN_SALT',   'C[@ec3iQn>R^Lwr<PSj}<YV!T[Zm3BjImd8X3z1}}~IrStk3qB)QW xby*@h<U@[' );
define( 'NONCE_SALT',       'K`eLaA{Bgk5*nX9%?KS2Av(cH}L0b?T@X33NxCU@7bzs*m^+o?/,Z?j $.!TZja4' );

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
