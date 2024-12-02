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
define( 'AUTH_KEY',          'VMjy3#1}O`o]aJ,|dWfunW-F!P;GOyw(w7G@bX/Z}g^%wB`Jcv$_&Iw2QZa|L$I9' );
define( 'SECURE_AUTH_KEY',   '{%_B,zDU-_i#.37L6>Nuz.2OfI$iY$y-<#1uL/WekAr;q<En:,ZCf5)FnHEuJ=n)' );
define( 'LOGGED_IN_KEY',     '@=V8-O4+/vtKtbLIM1= s$m/@izA9NLI]9WYaXo*f8xp:#v`v<+gKIm ua*,LeSo' );
define( 'NONCE_KEY',         '<QMwV?T|D7tS,swT){5H(mxQJr&5.RaN%~n_x.ON9Q==Z6R|xCSP[N}`tsr#.CJg' );
define( 'AUTH_SALT',         ';`5*]Tr8#/qB-m00#si%/<`?@ORlQsC$%3-4c%}=WR}1Uz-~8|ZOB_jJ9,pud+}B' );
define( 'SECURE_AUTH_SALT',  'kFv pmIs%QP5pT%xi.WRq1+/sHEA/~_WXxrltdW~j^F!m$&da1i+%,@va:/G5( o' );
define( 'LOGGED_IN_SALT',    '{NYppWK:e2rt0z.6CgL{$lJbGIee.NWX:xuxg?kRB@d`!rjk]<^}.EJPT>&e+tLP' );
define( 'NONCE_SALT',        '92GO[J}mW.T5]g6c.9^/;tSZRBzIr^ QVy~Za&yUl~XaXM<D$/b#RJb8Y~lxH<2q' );
define( 'WP_CACHE_KEY_SALT', ';9LhamjCJjmfNJyjMPxyN<R:={t`N5P>wQ:?j~Yuq;g1HhG8PcK-.OKomZ,ck ?.' );


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
