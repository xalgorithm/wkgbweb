<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'westkingdomfaire_org_2');

/** MySQL database username */
define('DB_USER', 'j8ehwtvx');

/** MySQL database password */
define('DB_PASSWORD', '22L36djy');

/** MySQL hostname */
define('DB_HOST', 'mysql.westkingdomfaire.org');

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
define('AUTH_KEY',         'X|@QI2dME`iAwb^toZB@1L8`26bQ^PFEx46lV:Z$yTs7#PD4ZYNUhRoH5KGijzff');
define('SECURE_AUTH_KEY',  'oqK*Z8BGB|O($vD*rSMYg;_)NsD2|CkGXTQY(;d$GL(`fqs^|vYTY1In)Y#*m+;m');
define('LOGGED_IN_KEY',    'V^SrOa5v*"g+5cl!TAy~~1g+;6w|o6DpjS`4j||V#Bv5gP;Vev:3_xYb7t8xuWz@');
define('NONCE_KEY',        'L2*n#~9?h@^f?|OgU1TSiTth18jRyTlPFF_nT%stj`hz/24DyAC0|vl;RYALb/ck');
define('AUTH_SALT',        'Or5br+?35ED84k^u@+LX"@)PmT^!HH"U$n2PSt+WOiBMpVn)7r0VUa5c;FF"A?lX');
define('SECURE_AUTH_SALT', 'NWF*JK!Ij$fc68vXQB9T1)dT6:_U"+|B8IRyZjhe79F77+jfEmCH9Ku+ozmZ8"Y8');
define('LOGGED_IN_SALT',   'H6poI;;Fi)@ZXGCVkls@)8O^bDztO;6`:+uRBm(A|nfb;`"1YY@A~L&W%`iCQF*s');
define('NONCE_SALT',       '/F702Eihf3iRyZMJP6a`Dyc*#u^Y3*1bm8sR0g:ZdLoBTq`X(2pUABr:F29eM;1c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_fwncum_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

