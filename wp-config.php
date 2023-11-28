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
define( 'DB_NAME', 'wp_' );

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
define( 'AUTH_KEY',         'G<*?|S%@?br2a`E%*!WG-/q#gq.1wk:Tq|3l:?RR:F9XA+:VP=EP7zMm(wE:VUCF' );
define( 'SECURE_AUTH_KEY',  '0]_<dV+Vm-%i_S)YrpQ!>&B2F!.hxr~$Srf;VtX3>F[K>:eIj%o&C_a6}R(p;un+' );
define( 'LOGGED_IN_KEY',    '?)S1y,GGl+]/=LQe*,W`nI[OB2%^Hi6^yU?H3FiZs8=9*7g_(S_dU|!Jw3U8t-V.' );
define( 'NONCE_KEY',        '6~s(@hhUyph_.PmsHavqo^UA4*X($$MYLderf2P,K0jVn54rm^KA6[f#2veh*qRk' );
define( 'AUTH_SALT',        'IcWiN<il-@>c2d,0cs+<qcL37>w(F0XqC%Sm>>gb(qV1nz2N8Q5no_(j[/};UX/.' );
define( 'SECURE_AUTH_SALT', 'K1,j4F)}fOWX}+Fe?7*@e;a(`UP7_o[o.D#iXAU_|WcLla/li@}k~!] L,{T#17)' );
define( 'LOGGED_IN_SALT',   '7I:]j}>4Z95Ww^)MF|M*AK(maN3fQd]IK<J:cmN)-zQf+9a@*0GZ6|+7 ~]!KL~]' );
define( 'NONCE_SALT',       'k?&p9kdPCOj*eFN(oMFo;qJm.d+#PhG@S(IL Q`A>0701:6sd_ K3.9i4>GtU?G)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt';

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
