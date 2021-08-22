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
define( 'DB_NAME', 'mtileoaffeliate_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Lf??-YDzx&-7Co<Q3W[g](ERT?oN~ZIY-[dK?=;sLQ<&L93G8G=.]8xM0op1ARd.' );
define( 'SECURE_AUTH_KEY',  '8[: k&}rXPI9=1rgO>0}s#Bv=pQ&rJ#:flW@y;UclT=[`2j`r|(uvQr w>?VEvRe' );
define( 'LOGGED_IN_KEY',    'izpz<=ua|X#ZnVgKcK>3qm?%?oRv(}N*aN@c,dyRiZT{`S!M+6P:S%#j@(jm*)Iv' );
define( 'NONCE_KEY',        '6<)>u=};`gD!~mg=o@_71U:c~ly1-Hz7y6JeGud2IdTFW5#8NaMiXSu _/>{#A75' );
define( 'AUTH_SALT',        '>;u+JReSr$ f!yk8Np~>LTOv+M|!}K4RrZimOZ 7XdD#Za-%a7dWCmC,$Y8$g~iz' );
define( 'SECURE_AUTH_SALT', '!(BuITL7])~/LN0ROg`$jQdX%v[2>X,*%G{9^8&lI+7dJaZt<_kWj,XauTNTeZ?|' );
define( 'LOGGED_IN_SALT',   'E1A:52<(;[=8Tx(:MgB4E+)bWb~;0ot{=^xQ@cdUyB:JL%Awp^D7.C7le)5?~v<x' );
define( 'NONCE_SALT',       'J*A ~1wh2ij{+C)ZtRj+,sc4s=Ssih{_O7;[{.%G>sG^-N55m_BA8ZYO<2KB0pvh' );

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
