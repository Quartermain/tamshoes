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
define('DB_NAME', 'tamshoes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Z=yYL`?V}jk%%^(%LM$DzxrR`@Lud)HOq!;}FW~Z.#&(|Gbj.H-!h3v;*4|0|&Gi');
define('SECURE_AUTH_KEY',  '_gw%w:[>WKw3 nao-QEVU.7DLzeapfY&%J#r:tOX>Zl!lXOs~,,q+i.8QnEpne|>');
define('LOGGED_IN_KEY',    '8sRc4b#2vq?=rsui%X[3Nnjt[N0dW1<n$[l5!3V$2WZ9 ]1m:h3<-jLpd}TZnn*E');
define('NONCE_KEY',        ')s)3er1}Jhowl*,]LQqB>OiQ@?gH*!wfWPk(ZbNl6H1;%@j;jonsnL+X9W~H_3L]');
define('AUTH_SALT',        '|!_;@`so8gr!&-@_1[WE /xr~:6WE`j^o_!+HTo*SqN*aS!q2&_<sDCOZ-EXkXQ0');
define('SECURE_AUTH_SALT', '.{:UZF20Yw_}0*o:.80Wr_b|,[y,km:HnfJvY`QyE!$WR-o3oJb.[o~Bzc,B^iM7');
define('LOGGED_IN_SALT',   '2`4Jd*Zpcf!g0>6hE8C`evpD{}E&S(&}W~nyz,YSX-kRp,j6Y]XD9X^3Ed[&$K4o');
define('NONCE_SALT',       'rs%=^?lM*%cI_c<|j,y)#V_SNPU?B)|aKH9[Q|VQDei8R,uBEQbqZnduB,4b0u/m');

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
