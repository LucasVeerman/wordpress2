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
define('DB_NAME', 'WordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5RoS{PL?=lc-3?[,mk)F`%qyFZGLR%E_=p,7s8Czff=Z5WM;$Xrz#++[kNIQ&,=]');
define('SECURE_AUTH_KEY',  'ry WtbHsWGb70 exj/IOuJ?D@lOW(lg@!HHorr)B-?,%yGILL[>-w**pLO|`ih;I');
define('LOGGED_IN_KEY',    ':n8%/&Ljvaof|rterpsEM%#=C_]Q~|*LJLucJjW:2Q.Qb++LEhiYtV],%%tze>>0');
define('NONCE_KEY',        '9Kyv~/J-{x1DFS|Cov&iM%a)Q-YWN@,r_zi%drB n >G92#nY^6=4Auee@,Pti%7');
define('AUTH_SALT',        '4+)whPvaQm]UM[m$IQhs8Xro4;([n!Lk]AF9.R 5(u~3`Z5E{6RmLB=`C!MgNr-a');
define('SECURE_AUTH_SALT', 'gZiwhCG1NlEqCt7xV2;PH: SjeIU04Nt:>-B(j~@FF3Dmv>Z)-OnwFX [)pBt//P');
define('LOGGED_IN_SALT',   'a>A$xBay4/HCCn[GbO9?-k]zmphmI$3fRfl,$|x[z-{lTu(?2XM/h=e,IkeQ=@UE');
define('NONCE_SALT',       '^tsVFfPls{;^%N8HTyvm:|;7)cDy-;f2@/U&5?xI`g:+ktY(*j4BlNa2;NYV]b,)');

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
