<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'haru');

/** Database username */
define('DB_USER', 'adminer');

/** Database password */
define('DB_PASSWORD', 'Qo0w@NaF49bNC123');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=3y<fO0+`egHNd4Kvr|>~PkKVfMdiTp]vqi^b+%3mQ,3e^mtTn(l6g J3c{Ot=Lv');
define('SECURE_AUTH_KEY',  '_h7^(m6r`#LR9,^sS8jcAw>ug]Op|8>,=SamFm2%9}K<i1McLY3y%[n0Oqvt![27');
define('LOGGED_IN_KEY',    'Q@UUEcb |RH]*z?M/zOG0G}2-Wv},/Eih]q!J#^dfj2gs~]`{HlM!Q7_[s#a-q#Q');
define('NONCE_KEY',        '=nw^2pgiO[-/KPnQ1YzZE.}!Yn*aXt!Y]@-]^FN>doGMq>2F8;r3+L_Q&N)y]ZLq');
define('AUTH_SALT',        '&DmjOEuv75c|glTd)m)LFTd|fS-WQ`$=. MBMk<6 v+A8uL&WY*F1m=w+ov(#aOQ');
define('SECURE_AUTH_SALT', 'ft|M5J)Wd~[[UJ^0S1[}< SJ^M4z86duqDNHOZ!(c!qg?kTc2+%(Vx[$PtxuUj8o');
define('LOGGED_IN_SALT',   'yd=b()KO`a@&*NViWE[K+ MTAEbU46BbWD&#FOZc]]A=AgYO$EWis$1l:/Xxnh>4');
define('NONCE_SALT',       'JX?:Y;pD*Xhvur)02F9&xb@5(3jf_Q9kSY]a[sb],8=M,AJ6!8`basydA p0(Qh|');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_haru';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
