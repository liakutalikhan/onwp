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
define( 'DB_NAME', 'onwp_db' );

/** MySQL database username */
define( 'DB_USER', 'liakut' );

/** MySQL database password */
define( 'DB_PASSWORD', 'liakut' );

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
define( 'AUTH_KEY',         '`%Ns0U3k2O_^TPE|#RNk@TZ,lZsx8)~j 1t:$[C>/zvJh![}HC(Q(DHG%E]l%8j+' );
define( 'SECURE_AUTH_KEY',  'XUWUL9B)_BhENDf}{yC]`]Dzhf)O7-|`f)4|k,yC)2OXx1:=V[p2S).-(khjms l' );
define( 'LOGGED_IN_KEY',    '$AlP``p/#Qr`&^ }!&Akk:h?E:Ik}KeY9K1&t)l.),h,n[>Tqg:nNX5HIz=Nf<1;' );
define( 'NONCE_KEY',        'n|rcR|^2OnGY0OzkJu]*HCq6[xqd%Utv~>z7W.OB,P,gzMQ|&y}<%<Z&N?0H]K*|' );
define( 'AUTH_SALT',        'q.N+Hxx.THC1jyD.uQ,Zj6*2DL|3/f 7Rn^,OT3DZF`2]%eq`2Ee0}m:5Ej}2,N~' );
define( 'SECURE_AUTH_SALT', 'k]^c^`]2]PSPJeUQun JHuD;#QlI9|`d^TCHciMY++=],SS[.i?(CxZbBA<R.6|A' );
define( 'LOGGED_IN_SALT',   'vj4bu6.p:=8@TOQ,xh~49GhK-i!#$U$MB<q&Vr]|L}e$ZxCmtbT0%+GICYWh~^ch' );
define( 'NONCE_SALT',       'XozS/U**J+~P7ql_Qbac0>^YNy;{(83R;=j*{;O37C0]P2Cx!>{bEGzu_$#>ri@3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'on_';

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
