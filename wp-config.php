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
define('DB_NAME', 'andy');

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
define('AUTH_KEY',         '90jY-j:6$jJ>Zd`D9N&/{MO(eI`Q!v:a~]5)A&yy`axqj&$p-k||_I|#{7:+p/ZC');
define('SECURE_AUTH_KEY',  '6F=%UxJ@/H.OpIL Krk{0KJL^b,~mK_MPgbYd`gf:i_G%Q_qh8$w0~?z|S-,koky');
define('LOGGED_IN_KEY',    'jh;r1>s&clW+X=N9N&R+X9ypGk,&05X0FI9(aZ==Vd^anl<dw}-i+??NK#f|cTa6');
define('NONCE_KEY',        '0am/-FKLD}-Ig-n27q}|OSgkN<mH*XQDe93rW84hR/!eA+`h2Q+54CDJ?_Iw#ZTs');
define('AUTH_SALT',        '<<X8$9_a4n?hnPlKm@(7&Ib;5fFA-<j/>7d0,m2+F/8]/,AI|c^^.*=3F/-I$v*o');
define('SECURE_AUTH_SALT', '&P;X/~(E,|8bk]h;JdtqB)TMjevZN9|<3]-EGSv`XjW%~|e3dwV~-Iu5$P:Qu-9#');
define('LOGGED_IN_SALT',   '|+Sa%Z>+9i|lU$++8Vbww/1~!MjDW{s}YsC(W>w-IZ(WHOlp 1tQe!tT`uSv4aR1');
define('NONCE_SALT',       'aEq>9W{FaR=7JR7#i&#+$4`mw^9n*gU|,~SQKvnXj4MY/PH.mjU5rNVK8Yl!C/K@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
