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
define('DB_NAME', 'byronfayDBlrlg');

/** MySQL database username */
define('DB_USER', 'byronfayDBlrlg');

/** MySQL database password */
define('DB_PASSWORD', 'F7LTLwlR1u');

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
define('AUTH_KEY',         '_H1PL+lilW5_~+xL2;2;eaLHEuqXqa]<t*qA6.6.*TAM3fbfPL$yuqb{<{$yIEB7');
define('SECURE_AUTH_KEY',  'q3<QAM6q^qI3A{TEEjYfQyyjB}3yM77>gQY^rrg4,^rJ44|NUFzooZ:s@oC}!VKR');
define('LOGGED_IN_KEY',    '|N}0!KRGzZZK~s-k::_VGC:hVWGpwh5[pa_t-pD2_WLSDlWWH*qx9]]*T2A]iTTEm');
define('NONCE_KEY',        'at5*H;b+yPAI2bLM6ufm*^uI3{UE}!VFNvggR[z!g4[[-CJ4oddO_hod1!wK5C1');
define('AUTH_SALT',        '~DKGxtdaW#xtxtH;]HDxeaea;+xtqD]#]+aHDA6mXTXT.uqmi2+.*PL23fbIbIE');
define('SECURE_AUTH_SALT', 'th9#1~SO5O51lSeLHxi+he;~]xLH;H;]eLXEAqataW]x.qmA<A<.XEP63jTmTP*$-');
define('LOGGED_IN_SALT',   '8wd:~~l9C:hOO9pahO_tpD;1_WDD;iPWH+xi6.]+L6XDxipA]{xL6A]eLM6qbe2.^');
define('NONCE_SALT',       'NYN8vkvgU}!!vkC}8}!YJNC0oZkZN|w-od4[0|-RCG5[dSdRG~sthW:~[~sG59:_W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
