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
define( 'DB_NAME', 'MarmitonData' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '!OJR1 3iMr%8c.^@fIC*U^mhV)E;XUIHC~n/!o%OViAT@`4K4Z<+_-8e5_U hT]9' );
define( 'SECURE_AUTH_KEY',  'D8W FAH{M rl7!NQ3g#S`<>nbLhR-a63:hxl$E.Sus%Ln#Ho7LzG(EA}zp^ 3G:9' );
define( 'LOGGED_IN_KEY',    '<5$zH8sn~As3OqeP_)v(a$VQY~%h{W^ldcd+$ge]y{$HWJ|;$8!dz4PJ3a{(qod%' );
define( 'NONCE_KEY',        'u4R+.{V UiRJW-`[E6hc:A*9SP4%5N*`NeEXIAuf/-(n#e+xKSI6{c#3=apIi4<5' );
define( 'AUTH_SALT',        ']T7m6aGG{ytZ[rAW-hUP0kMy* c4B*w>g~](-kl$AP5<NB:|1kCph=.d@^3RZO.M' );
define( 'SECURE_AUTH_SALT', 'GCRtI85]&DxSK4I`<ZKy2WpH@t&E&=OfJojYXGm|+Og/ymUZ#Y,uHy3Y*XJX$,mV' );
define( 'LOGGED_IN_SALT',   'ydr,9&E$c}RoMdvh:H Y0N^RK`3%1:kRW*n!^iXcCmgY$}W8a]lNg+<7l/)7aUD)' );
define( 'NONCE_SALT',       'mZdqt<i-34~~GG^gh:oVlcZulAcjM)i+6@y`i(E8eHyKY61U5R-z(,DT=edwo.BA' );

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
