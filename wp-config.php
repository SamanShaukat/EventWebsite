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
define( 'DB_NAME', 'EventWebsite' );

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
define( 'AUTH_KEY',         '*8yN9v{RS+T3l#mC-Ub1C J579QPS t j4[92)Ropb/D%C7c?%FF)[P1?}Ze5}Bc' );
define( 'SECURE_AUTH_KEY',  'LXGqr9BVyGM d[>N@B?aqpXM@MvHySq6rlo9Q+*lRWs@g`x?Oy-PWP|SQH-CWS>+' );
define( 'LOGGED_IN_KEY',    '#N%WSh6u(#oPv1=F_lO:=>3FBHN.B%nC+vmr?^^s8=FH>ry6!}7Z/o9#G-GT9IxG' );
define( 'NONCE_KEY',        'kAW0Yfo<.})t(}RhO5K{N<nA8z~CJYdsAk/p5C]ai1BSMDh.m--91L5&q-OdYs0r' );
define( 'AUTH_SALT',        'MVhpPH>n*ss,jJ|J=Y4]/Y!xZ$T2^TFKIj-ya{`tvI>B9YA.7AsOS<ai2PW2|1eh' );
define( 'SECURE_AUTH_SALT', 'qN7ce= 66K_E~^zb5xo,l)]0g5K0dk=sNdPPaPZQ8R%E4z,XedV2:?+27dy_sAhR' );
define( 'LOGGED_IN_SALT',   ',JG6bI;S1GYKGULk_}m+hH#ay#b4J*gb6{%Le&o$E=s~ViD6{8hQG IJn]8R!t!5' );
define( 'NONCE_SALT',       '&CQAWdv2Irn9ky*H?_$4%>Ypvvrtxwa2!HPJQx2E}%H]b&uaDcmD]~$.;!,OJRP2' );

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
