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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordprses' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '17M*71mr' );

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
define( 'AUTH_KEY',         '};I3d~o_QEi0,tCXm:Ke1xQ<S>08bv@Bv!.Yeh:>N!:Y}rfb]05;fFxHM5T<-j^R' );
define( 'SECURE_AUTH_KEY',  '$;FMovtgXamyicZF2sr*DES.;({G5:DKFFi{pdU!V=]kd0iXF Ho*_u+H%23J.hK' );
define( 'LOGGED_IN_KEY',    '!PNzWCw(#RNTt2L;B2Or;E.yX!vKNyHN2R wcQR:/dbS!OiTzk)4r@8^|~HB;S5v' );
define( 'NONCE_KEY',        'kmQtZ)<>ch`%GO #i%xsTGMEJqUN&e))%DH }8CiCu>n! u>?6sYRXLD)B)9^f>M' );
define( 'AUTH_SALT',        'Z}}V.7XNS|Zjnv9t.(E3RB(~$|~x~<MbdfZZ=_WV[:oP6zhDDpaY^wG}<`>b.[nj' );
define( 'SECURE_AUTH_SALT', 'YB$H`6|mHsd#@B%PF;2$[^k|X&!XQM?~M2D,FSQUGQ_+~Px]mb6g?u/E,l~3y_u:' );
define( 'LOGGED_IN_SALT',   'PB,B8hC?zL{6SR`6UTvD([E;nNnEh~-$JY}8UU0B^L6XgTbdF-sbptGqeo~@N60-' );
define( 'NONCE_SALT',       'mdU<t!*f4Uy7`NT7_Dv!*wf5&c(l{-N})TuZOw`drZ[,[B3rOW.BmazLDC:LE5%P' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');