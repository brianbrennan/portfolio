<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'Portfoliowp');

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
define('AUTH_KEY',         '+nGvKkgIk*?B3eudWz#nDQb{[&rj+%OOLJ67=Y%_~gaoo1&sHg0V;v{G+:%}hy}Q');
define('SECURE_AUTH_KEY',  'm8+(qhP1n=Cj(o/6wh1c*R@|Jtk+F>,H7N??7g_u5R}@5p=@%dH0CEcV(8fw%jV3');
define('LOGGED_IN_KEY',    ':8z+E&TF}2V?=R+&8?[<fNBLuc?^uz-;GWrDFtwl*.>%|KGHw;^+w+&hniA<@sTy');
define('NONCE_KEY',        '(>VLR>RR@RdHug53tWxOA!~}pQV)IPQ *Z$c3V+6E5c.xKKU;!+Evd*-]vwm%HN/');
define('AUTH_SALT',        '&o?XZ}PyXnZVm{{/AJEGTXq@+a{BAqaI6S,41.cfT{zS$J+G:D^t^l WcVq#JCZq');
define('SECURE_AUTH_SALT', 'OP`oldZ,_p8ud7v/r;MsDC+$J+lRp;n{LFQ$ntdm>=f@|F{=Cy/hiV[ud;)!]F%|');
define('LOGGED_IN_SALT',   'oVpk|:`Cyk-}90|]}RL>-8#NZ!rv_l*2v=f+8$$b=JC9!!jDFkLmEErb{cvva1LZ');
define('NONCE_SALT',       'fe4+N5,Nq=&HM.E[7zZVOu8^,X)|K-^nLQG,Wi>Eb.b)[h)Keg)jz%E<,Q*37}*l');

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
