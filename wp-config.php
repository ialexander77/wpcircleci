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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'Od.5x@n5piB8KYCh?V@taq=/8hP~Tqn$9wIFyl>b~z{ (yO,j7?s2L8zWG5{:^6g');
define('SECURE_AUTH_KEY',  'xJH:jwman,6eQK.@iox49p&b5{@}-[R;,}w4}z`duGhs7INGac0}iI GQ66G4l+G');
define('LOGGED_IN_KEY',    'H?~MTCe4Bw:2>KX01zyUNxWn::&wR#wLAg.p_ CK_e436T/X&fc<MNMbkI`44G(9');
define('NONCE_KEY',        'do<D z,c[Y|qROIe8#A1oVE.^7p9&1J/!R_D0,`Qz--8xcrY[igL:{0~%~.-B^)3');
define('AUTH_SALT',        'ScA&Hh&zR{|b_i0G|h4>9otj~TW_~s>l.Zu5sYSp!/rMJ7T$Hw_O!x2N5n`9E32-');
define('SECURE_AUTH_SALT', '_jCdFOUO=uq]17{6E/[lsDJG<vW(iDlB:`MYx|@D9N,LR/~];tM?!`/L/t VKO}~');
define('LOGGED_IN_SALT',   'c~-}E/a~AT-@ubA(lyp!>{JKT!!*Jx_*>:a~iw>xF.^hrHYkNz6qA6#Xjx$(NVGj');
define('NONCE_SALT',       '}LEPAPlCW79PGX~&?@/B5qVU|>|gK#p)+n$b-:edA/#^QLV5N</Cvld]x8,]F|4O');

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
