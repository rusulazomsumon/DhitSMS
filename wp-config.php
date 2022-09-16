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
define( 'DB_NAME', 'dhitlms' );

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
define( 'AUTH_KEY',         '+LZQ`tPe![HZYYKh^kq[bB5ss#bu|gn$IN}(e+XW pl2I(R?jNS=G`auEjU[/!R~' );
define( 'SECURE_AUTH_KEY',  'E9@,s&@F< 4yW.vPANageyV^c_^$)S*/P*.MpyG+Toofc@Oc 2>R[{@+JE#=MA1 ' );
define( 'LOGGED_IN_KEY',    'Z4h_gi63oq[Wi4k7wrH_>V9hu,*O~Gjj9>1_z/&#P*fQgws{~)[,.5a)t]y53D?z' );
define( 'NONCE_KEY',        '^Yu_ZUs}+!{f&Y(<hkSk26fzti>X;|>6?Q-#;M~}o4A{$i^r.PX.?.[LdjKQCnU_' );
define( 'AUTH_SALT',        '_~tpz`[EW6VRz&-i]RHF]ZJNAYDS#Unt:7X11A2zyE2FJe(y$*TX%z8du<MuVc&|' );
define( 'SECURE_AUTH_SALT', 'AN]HIm|BBaf+>IMs@QnbU71@v,[y;A]5xdr`x#+AZ/`gH@C%[ko-8Y&I1_>I@mUu' );
define( 'LOGGED_IN_SALT',   'A%IEF?#N|?8DQ[Sg^!-( >UzzANp#ZbWgFb=7dqL,9pxVlZ%XV3:A>[n8h3}?(1D' );
define( 'NONCE_SALT',       'OP$l5ux>9+{:A+ `@s_ 8,ZiQ}ReUI!;&NobD69s^TzdEn9F*<Fa[pP5;Okio;:a' );

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
