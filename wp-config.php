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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'P65+R)b<$Lc-/|.V0Adg;:)liCrhZIAlPZ9) D5K5o(*^= :zesh%GYo)H~#)G`Q');
define('SECURE_AUTH_KEY',  'azOW:5s2pId#>E14-&eeHLOT]|w5|wtM<6gri|a-MLYnKHE<#0eZ|d$9:bC</CWN');
define('LOGGED_IN_KEY',    'I=^r}-B9E&Ao(;05;H]}/)lvn%!cN6]|@jn,uK!72g+M;0T=kZ|U]vR]I-+VecqM');
define('NONCE_KEY',        'CqPovui2Z`|7V1+TE!t(1@QYldj0S+*s0N0]NYC=Qx=[P@Y?l_fd(w!mSjy2Xw[t');
define('AUTH_SALT',        '|y`.w<19k<q6c/:^+i&kNf)R*+AEq-(NbL%`;!2{M 6+kcX;O:,t~:Y$7oXHMA`J');
define('SECURE_AUTH_SALT', 'e,@E<V}7T-<91`Y}11d7Pqlc@i8y!!2f FLV+}+:-d+qYvu,K+8nD6<^Tk_WY#9-');
define('LOGGED_IN_SALT',   '379*1]-`xix+gfUqVZ:Oik*FW2s7#@y16,]_nWV4|L{lJD.x?i89b<_r58AHcOxo');
define('NONCE_SALT',       'HQ`:ZU-WJmM,aam^{r|0 @fC%~(@=Z;Ta4Hv9]09zC{rBqS/JkmbI<Bz+K~|A1kX');

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
