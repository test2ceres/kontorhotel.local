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
define('DB_NAME', 'kontohotel.eu');

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
define('AUTH_KEY',         'K#So;B;N$V[+xZ0`O%iE/jer8[re)@+[KcqH-}*CgcDq@:P~_@aQx-9V2q)#vQDL');
define('SECURE_AUTH_KEY',  'N?5sAS~/zg=EQ&Kw1Mf-=(-qPB]fx[E84b-;OGsTonfsj`nmLoud<[j[8F8V%}L;');
define('LOGGED_IN_KEY',    'UIe*Vl/A&mP@~d83ws[N=yxT7-mx/R/Ac*vK02TnWcE?8Xyd@|uCfS_o$6Gthy+1');
define('NONCE_KEY',        '/#E XhLo_@[K#d@pxVFq83HS;}m~+=.uVIt_-?rr|@!QeIL A*&-_j3B}4 Kk|7+');
define('AUTH_SALT',        'J]%VbXN=y&-*it%@NjNUFtx**,<m)D0y+8nC+C#imB$Y^4$hi5GIgcjWY;xc%R#-');
define('SECURE_AUTH_SALT', '}EvxjI2;Rl]TdDRC8+P~-1yl)dB&~LtD<xl^$.^5[f-_sjH=JpF4U3]+1Q-8JzNd');
define('LOGGED_IN_SALT',   'x-VE4nQ:}a]BaE+<Ukr[||~`!D%wrIf:yVzfDU>VFWb675;[w`S|s-Q4apL#@x<l');
define('NONCE_SALT',       '<g;U3BM8aXb%/ySe1uhHGd<}-9p:[Xyv.]u_hMy%[i$xD>_%z7cvz,?o4,KlLmA:');

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
