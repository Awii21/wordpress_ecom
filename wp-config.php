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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_ecom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'G5fs3`2/Saax;xR sS9WO1t{yC:yy~K %LdZ}cfg5C:CeIqP3R2el<;S*=QH[<I]' );
define( 'SECURE_AUTH_KEY',  '<FQqCSik&[--IRW@`[zd?+}&28>Gt?`Rg-VI.>t1%p39|:9;hdhak=3,)^.}c2H^' );
define( 'LOGGED_IN_KEY',    'FDy8aV0Zq!w;z|Xb)=pfcs{(v-(Qtk%=V*HAg^iz;SnUnl-(PoKWqMoZ7h*fN%V&' );
define( 'NONCE_KEY',        ']=^%T]n>J&+?hw}7UN{kc<#R}l3-yy+j?~jB%S{jrY8:jiyrOzdm*+y&+,tMXXfj' );
define( 'AUTH_SALT',        'XWz8tr>6=^Zj_f_wMbS+!DvC!@^+YYf(spd+HL_p!cY ?1jg5{TslIO4A*k3J.t&' );
define( 'SECURE_AUTH_SALT', 'j=>yt^G #eEUpvQ`hRT]Zn_7nm12xliG:Ocp2jG&]jTjo}hdH<7%AS[+oQGF6Ogl' );
define( 'LOGGED_IN_SALT',   'bfrQXGPAUOtxi> Q-*N-u[ %{>;+:q5uf!lc71x#$#c}LyVouErsV{to~]M<`~po' );
define( 'NONCE_SALT',       'gS}fZde0ryTX,8Gkf!)ZnsE.+aY0QFJh:xs7<Mt* o(Xyb![;#:JqNy8w_q5,qu1' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
