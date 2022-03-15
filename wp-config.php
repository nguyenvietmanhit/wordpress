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
define( 'AUTH_KEY',         'f#!yyp|JmS%(yk^TW41j|C8~8jDJVrw>|n?!Q>1HSaF]b:ipSXcM3qAr.p4~P^.H' );
define( 'SECURE_AUTH_KEY',  ')[VP{WR+ ouwHg2<v@bWDB:?3.zqx#V_66</e@L<U34*!co++}Q4upc XThF_Bhv' );
define( 'LOGGED_IN_KEY',    'ewQLtc/H!jP/&C3>w#cB,h3&>o{x_cg1lV4xqT,8hil TD[9{RWEK,yR&g%Zx~Nb' );
define( 'NONCE_KEY',        'CT(9mQ~3!yNgzg9J^bj$bMIE$%N])O%_{X8X#H>]Su6J3zaW2uM T2fFn_o7yeOo' );
define( 'AUTH_SALT',        '@vWBy6T|aF6(qTx{z17ppL SNp<VHOG?T.)9Z)/[A6rraAF5WUU .@wK2}F(CoE{' );
define( 'SECURE_AUTH_SALT', 'Jf6bvu!>I?o4=Kg-tAK[e(JA}q(V%l!No cQ%NN%zrgXALnU?oCF&@-n|>M<uG:.' );
define( 'LOGGED_IN_SALT',   '7Yp~@/>W@n:-hBuV4MVv8Y4]4s|-[qJDOc3Ejv9elfJQ-.+>z=hm9fB&(AP4~w^T' );
define( 'NONCE_SALT',       '}pz!GP~(RKYkVkTG6Q(cK|y*lb5{m>|-O}.2+d(]R>:[^|W5:{$KNo-!Ngzf8Cz=' );

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
