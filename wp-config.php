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
define( 'DB_NAME', 'portfoliogithub' );

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
define( 'AUTH_KEY',         '81?&1ln<b}gsBc}2?i-,1lC6Wlrpa(1MrEH0k[4Qfo)FU}#OXY_yHi,*7`I.cjj}' );
define( 'SECURE_AUTH_KEY',  'sJHSx]nh7PU3e!M$tK%,ztGHc/~!WK?Ob4m8_BH#>pp_aKCzl5]5|@>l|-kt0D0[' );
define( 'LOGGED_IN_KEY',    '^(S/) YiKe46]u|pj5>am-)H)iL<=5sXcPa`=g11BLafs87C+!,VG7Y;_e!=!|jT' );
define( 'NONCE_KEY',        'kE(q>6->>Dz(M(< jo4VFcF[Lk-8E=x5E(!-6DmJA<X_$E75]wg2F!,/ #OU.L@R' );
define( 'AUTH_SALT',        'F_ccqq!*$%9bSe)38Tn# apW9>$#2X<KDK+2pS5!i+`GfwLD264mGen>ZyWq|^VD' );
define( 'SECURE_AUTH_SALT', 'w9HF9b!O{)0ubjz|-X3~bFu|-5.7x-qA9UmTVi4J[RM;g,KLLuZH18@D78r_)2yd' );
define( 'LOGGED_IN_SALT',   'Xd{F>evc*`e?eItW_o{7*[SP&8m)?Xtu./<i*hx/X7XfaW9(?L~Bd4AN9.VrV&M3' );
define( 'NONCE_SALT',       'H3#~9Mq$]2ghl1igz/PF0yeKqu(]>83Khn39[CT*<yr0`S;YroT;rwH$|ev*L#95' );

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
