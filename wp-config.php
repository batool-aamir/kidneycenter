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
define( 'DB_NAME', '1fu9WFd5d1' );

/** MySQL database username */
define( 'DB_USER', '1fu9WFd5d1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ctzWzRygSE' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'IM6y7BDs=~Ed$ho*+M,~9T6<Rub0<r.FaN!^:Ph76pG7I.-9yT]}Bejk.l:bXSGC' );
define( 'SECURE_AUTH_KEY',  '1X3(Rp,WZjOiUG%SE(?>iR:wA1[u,ip KSZ?|A(g5;+wzW_|Q&>4G=`1$>x`]&Dn' );
define( 'LOGGED_IN_KEY',    '7Ae-7R2Ok:OAo=-]7TBqw:jL<MYi84>z;GaI=rq6/0vzfx.$g.;B1v[0O]`JITw$' );
define( 'NONCE_KEY',        'M}Ip7W)tUgI>BdTn?sX:<6Z5$Ha i.Urz*:,W{dO1ez1e>UsbkL/=by[[Id.7zFW' );
define( 'AUTH_SALT',        '_FHWGmsL`LZj1;T%g1gY*~0 aL*VNh9$uo?FB5F&s(|8Vl0(;VPnN-%q(P8m!k#I' );
define( 'SECURE_AUTH_SALT', 'GQW?k$!Bz~.By{3x?Rqt,*IvIumfq95]5f^(Pg(pLVl[1%F52{FAh]-uGH6.0o={' );
define( 'LOGGED_IN_SALT',   'bMEq(mg!=gg!j/ulkP]L[=;_~B}@g]MB+JPJS}p w%]sIe<r/^niyYZLQj <6(6J' );
define( 'NONCE_SALT',       'u%]<s_xNnCf+;jrXONPf`@0rT#7XV4>#zSQLe?m*[=EV:K+iY=p^#~}k`M-ujgRb' );

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
