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
define('DB_NAME', 'www');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vancouver');

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
define('AUTH_KEY',         '-JnZ0K_4I8/ wE~Tm@7BE`XD)3cMBCXFVR-LQP|bSs0v;R%~K|h]5?/lt.;Tn g=');
define('SECURE_AUTH_KEY',  '<SD7`,@;#oLzG={w+pEW*z z*Mc1-RXH)yVqy;z_w]YYlIr<_@+Zw 9$m?N7_qF9');
define('LOGGED_IN_KEY',    'Ya9(1W/OKXO]/02cn@uvS-}32&q{dK|-T2n${^7D.dfF)2861`Ltaj9z5fo`S=2$');
define('NONCE_KEY',        '&xF=a+0a-#i.Jl<Q>N%i2&-s}llR-c/)EEHec] {AJ-|XFI;2Ge|%&;/jy ~6!w@');
define('AUTH_SALT',        'VQa6P`h9~O=0w(14yM.5:6:3[#PX&hDR3>&<hRHpP7A{TZ0=qXOf(,xp Meis.`I');
define('SECURE_AUTH_SALT', ' +2-o`^8B$s%zYPd4Run7W&D[LtF.Vj2YWsLRku6B9E}qm8R!`KCE1--c`>&#(+M');
define('LOGGED_IN_SALT',   'xk+KwghcO_r&W7vo_atz5UVqMq||+1_2684IJ60*0|nT9xU%]YCxk+>sO:KK]+wz');
define('NONCE_SALT',       'x4WVXg(By(r2E}84jbMbXai|^El-.u`vkE8//I:Wy<6-$B7c9<}y^)W@|9pT+:nk');

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
