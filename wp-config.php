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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '90GCX.EO&zty:f lAW|?DK:Cgv;=9(u/1n~09uz:3!L*sQ/i~xCgeg@fTqG})qac' );
define( 'SECURE_AUTH_KEY',  'xpJif0|dM%;nzoFx(&[Cu-d SQiq.Oa?g BQynt7?MQQIq-mwLdU5/OVm;PB<<Cu' );
define( 'LOGGED_IN_KEY',    '.Uy^`Wnd+*op!# ?@z[7R,NL_)!N}$7}X,7VUDd@O_3zCP2= CB{DoS[$Ha OD=G' );
define( 'NONCE_KEY',        'aPk/pN&{tAOd, dRATZ[K7uD_<^zCP}rb~p 7>I1y`=B5;o,iDk.q<B51ITu6noh' );
define( 'AUTH_SALT',        'O&Ggk!^Z $_?`@}pTxs6]m+sgr9S|@#+`~/)HB3 8<+=55+,c->&sv;g+>R?,8NQ' );
define( 'SECURE_AUTH_SALT', 'dAQ&?0qM+X:6u{1/hkB@[?]UGgJa5Yn[xw0`pfDmcfdO9y1b#SXC6!d&ZYsOpB4P' );
define( 'LOGGED_IN_SALT',   'a@v38,HiYn25`d/)Ix~1])[=xQ9 Q.uQk~i__-znjE2bs7yE3GQ %2rc{d97E/~<' );
define( 'NONCE_SALT',       'zV>%zUNyP1yz$7_^OaR6i,|[~T#?,%x>13ND{#o _1D&|cO[8Q*/ZM:*e{9 6DvQ' );

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
