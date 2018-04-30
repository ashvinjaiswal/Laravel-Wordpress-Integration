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
define('DB_NAME', 'golf');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'Uh9f:gGR`byTC ~VO,^~A-lM)MsBpD.`jZbP7VF $nWaE|gJ!T3BsZj&5qB7d2.g');
define('SECURE_AUTH_KEY',  'j pFd!&|JQJb;Vp.}`+=x1Mo!)$}@fZkUX;y!&j$EP8vYc0;|&]I!U^9e:a_r1Wc');
define('LOGGED_IN_KEY',    'J=sG1eb2G,#fH=QAMW>WghzkU>DsMq?)Ut.me AK3E-Aj;+ktG7SnGUvTlQ66Ls~');
define('NONCE_KEY',        '8kRr@RcH&Hmjp_p[<#.*`fE| Q<HCJ?bE]seyQy#vTNJ07LN!QWi_k[jarx51c^N');
define('AUTH_SALT',        'cZb`Fqtx.oE1.`>e+:^D8hyku20gAc<>9Nro>^JFZch]9x jD*3Js*OCbhfh=M^$');
define('SECURE_AUTH_SALT', 'lv8|aw^k&W`FPo^9r8WCjiFHd`Zl2j%vCfv+sOa$].,{K<;g+G:bZ~OYOMH3~2a?');
define('LOGGED_IN_SALT',   '%f:i!~k/Ub@?gT zg&d&n9?g7Q%)TMK,;~q[H(Ov,;8MEY!:(_!2RgXw79cDo]ZJ');
define('NONCE_SALT',       'v5;Tof%1hEdF3qDC`2+2s6T9JR!LSs1f_Bn;&=^F<0d4Tt+{R{Km3~am34}-!xt{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'golf_';

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
