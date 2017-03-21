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
define('DB_NAME', 'engvid');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'P q0:@ozqD+9u2?Kp^T_PuJ.r1&{Oah,a!I)8Y>^gV`=W$2-DwY0B--R9#cKP08Z');
define('SECURE_AUTH_KEY',  'MWt~l5?W2*1{R-7 ;s)#7p)MW=@J],;/p~nsgR&>}2:!RgM2P0qr@:mcHGi^B`Uw');
define('LOGGED_IN_KEY',    '.T$B19!G!onfS+vT,*7{#bSSRGoT<z*co{:}HXd[ 0$LkWy GHI)$i|,m:m,|DaL');
define('NONCE_KEY',        'pq> Uy[G;N|[3=z$j 5/<]_towBya#D+uKSMVt2G*NrI@sSkMmukC;HQ?R%5c#=r');
define('AUTH_SALT',        'f/l&?SHg3~k8TOs)JP%yu*)ylO&l>;w$92Bb@:8-<[|wC_hqQZCk>(-EXxdFqSxf');
define('SECURE_AUTH_SALT', 'i<by[gLsi=+p|Y-^ >q:4]gj0{d4dAXFtoV_}7)Pc@yE_pa3-R6E6>dXQ6s(bh7h');
define('LOGGED_IN_SALT',   'F;_]H*?o.wfsTuj)1NhK0#!#?+HN8-eB-80NatYN]rxqp&E-u+R]Gx?A2jh,_gNc');
define('NONCE_SALT',       'yV8K<+5!ZuyLIoup;8ND`acn=C0$[d=SDt9[S`[(W8]RYd=biGx+eq>VoUK7yW>B');

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
