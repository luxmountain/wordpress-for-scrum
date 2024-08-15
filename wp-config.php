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
define( 'AUTH_KEY',         'L:t2,ZmVaLBTX*ixzG9>l}Q-{gq_~MY-dh3<eDv)%B=,eaRb0BL/89P54d@du6!O' );
define( 'SECURE_AUTH_KEY',  ' ev#g=ew]en)wo<i&[O3M>eQXAOq5G$6d K)u+8GTu50:Q58Y~M]2eN(NTj4 f7&' );
define( 'LOGGED_IN_KEY',    'bWW{|n.m|z(%O%sY`xzt<fwH0BTXT8_ep3xZuzc%>9iWO=F_m.F8IfiApvFBZxg;' );
define( 'NONCE_KEY',        'I3#0 N`T~XXCBJk/%x|ZU@S}/olLV1S)wvX6k.OT((H=StRq<QD<6Y4k@_ 6SJrx' );
define( 'AUTH_SALT',        '+8V/8.C}r_Eai.jo<@^COog%D!{mU%k7>W-uNRhkWaKy_D!n:Ck-2ZWphc@EpbIw' );
define( 'SECURE_AUTH_SALT', '{L5`?s@>f<|}9{nUXAKJ]R 7o9Uk0K||-v  c6go(p^?cHK6ynek1`LpHAKY04J*' );
define( 'LOGGED_IN_SALT',   'f[|rFO|n~.e4Uu;Z/gv+;!FlL(=8UXOVM8(24~2O*JgQQ~;SgogMe.SY=D KeZY/' );
define( 'NONCE_SALT',       'Kec3B:iZd:!cFlog;S+=6;InobY{Kwi1C|kFgr3hWh7g{GZKmT[lzIq.J<P,3KT:' );

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
