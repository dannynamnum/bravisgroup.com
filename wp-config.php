<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bravisgroup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OD~/t$HfG1b{U}u(>g:TtDvQVTMb;0x)-*4xm#v_H`*+<u}#Jyc2$aVF*hZsPD<O');
define('SECURE_AUTH_KEY',  '47`@*7{Kf@cYI6rsoCOt+|+BU8HWB|[}<RC$mc4+${*KmydRi+a)NZfy0il7B*T(');
define('LOGGED_IN_KEY',    'zgQ]/_+1,R6:Em<h]*5/qQU{6+}pdXk4#)x$#,mAPEY%ghTi-O}qM7:r^UFq&YJa');
define('NONCE_KEY',        '=j()/5R~`FjVB2Mu~DV6{>U%Gj<Y5aYL^F@+RYv+)2c(v-4rEjxIG~O/>;2RC|?{');
define('AUTH_SALT',        ' .6PR-WR>:2^+=BRL8Q%M=`_K,It)8BbRHh6q:%X;|M=[hiE.]yH]_--b5T3xC4n');
define('SECURE_AUTH_SALT', '+0&&X-jeU6yOhq67:7NnGMJG-%pA@DmnqO^ATppzUQ+0Wu$TG24,(K]FHRPiG2,]');
define('LOGGED_IN_SALT',   'PScRQn+w9/`_[Jz6*^-5BjQG3JTK!!-}4xfq~;3|>rg-MwUzyeK|A0nAdA~aOh*;');
define('NONCE_SALT',       'w`cqnZdEs}t@|Hf-a^/h3Bte9kH-luE&odNwTLyz|Eti<y;8SDf6%kw*krpUyDGQ');

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
