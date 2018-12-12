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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'shanika');

/** MySQL database password */
define('DB_PASSWORD', '711246252');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p5tQJzv.-K7WjPHXwb%Y,^6Eo^EpN.0+ZOAYN?I!Z8)C.#I).gZ?A;-+n4UF/^5A');
define('SECURE_AUTH_KEY',  '=4N9,OqrLgH5jY<X=op6!u_Uk(,Z9@/0;b.M]0:V1;]v7wKChuk0hO8dF>YB7YEx');
define('LOGGED_IN_KEY',    't>I;<+T``u. 2O<!tdymO-(n$-24~l4y#l&?37Y;GAVWU%fjMfq9b%t+~&?w~OMZ');
define('NONCE_KEY',        'CtosJdD<d~cjus#79$,gH^%`L?E]13a1?$]^Hmt/aDb32*bqs>zd^aE2z!sFqrYo');
define('AUTH_SALT',        'bRoz;M`vL#m1X:NA>u~o7H7iY9mR9J$-Jt0v`7gl~Z:jV :NhlF,7;ZK==O#jiWl');
define('SECURE_AUTH_SALT', 'rS`8--_B+rp]gf2UA(@P$WF1c`3bmdrHKPoxFvls1]t;PCd_jpeg#)bF/)+(x/rl');
define('LOGGED_IN_SALT',   'DqVlE]Blvp[@v>@{{@A`^qAmU>Ay%!^lL@#`(:E?C{)OZ%(<Ozt=}|yR[+X<El9Z');
define('NONCE_SALT',       '0bE#Hn6HTZfgd3_>We)*=oOe(#([3&@bB(4C}Ko@<bFP27NfQzr1@rqsz7_:6dX?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
