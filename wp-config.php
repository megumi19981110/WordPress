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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|~6c4`e`%X?Dbu0p:FVhE^1rT%p#by2es2@W%PyjO;@9I(dpV[kY>FAI mv^%5Bi' );
define( 'SECURE_AUTH_KEY',   '>IbL1[UUU=8]k>|at=1nJ-+cU2cG.@9M0[13ETDnf#km#<]qQLS}.14I>g]E-EFC' );
define( 'LOGGED_IN_KEY',     'ieV[iMYnUYHk4Sw>$N;T$2/tntved}F<GYpGrQTfc{2Lo$mW?w1y}+@LdEtlI<MC' );
define( 'NONCE_KEY',         'YjDBv.6|>k?~vwq0DDtV/(!{feFn|4T_)eQ>d.;%TbSR0{./alPCWX$;+ :K;|0$' );
define( 'AUTH_SALT',         'B$RQha;buv6I~:gZ*tazK =#: yQ20NL{<s}mf7Xr,0[Wvq:!.Z>gYD=-K+j>2yY' );
define( 'SECURE_AUTH_SALT',  ';>~B!Izu[Ckz}LBkj%:n6)j?K $D1ay:?D_H(zA&@@.*c8c(}ETD85.o?;3Zf053' );
define( 'LOGGED_IN_SALT',    'w?Y~i?ApptXUqV5CWV:-q8#1CEA.W?kyU&Q2SBEm0GpPfalHzWEcD= !&dFjpBJN' );
define( 'NONCE_SALT',        '<|hpio2ZBWsyXcK9pjRLO0K!JU i;8&Q=;FF|5r?^%Wyi&S%?qcfN<z$$`A*ZQm[' );
define( 'WP_CACHE_KEY_SALT', '8{6;t`Y}Sr7)>Akiq><W>j0Lnp*$%Kz*wZL=Qd_mKex1mo7fQo3.pa:%4]KV:`=e' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
