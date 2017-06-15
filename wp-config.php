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
define('DB_NAME', 'hadb');

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
define('AUTH_KEY',         '<FM{!S 5s:76HG`FHGg%+!-@,II/`Vvv%^k7~%i;15AMgo-0$LV.8GGd.c5<PIzt');
define('SECURE_AUTH_KEY',  '3QJxdXN]ga<H2@d>|Ws)=kTUThsp)~3;0AU#BuM%KJ}LR&9Z^nPp;)}ha@:GZ*H6');
define('LOGGED_IN_KEY',    '  cf_^%^~L$HM$*f@>c7;$)aHWp(758e:sH,%5Q3mYNu/.xZOMv+P7/*gb=&rGw:');
define('NONCE_KEY',        '4)QM$T>kz_w9@.o}-*1_=||p]m.!+A|VRY$I76#Qz!#JZzP$)_J#D=`>;Ewb?aMC');
define('AUTH_SALT',        'u3N`5=[po3y..pg?(g6,dFC~Z@ZH,&t)JqTnX-s7(y%{o75)hIgDj8vK@9zm5=2;');
define('SECURE_AUTH_SALT', '.PNWXSx()#4t%y@)=]G<:}#~)6r(-?N3IW0}Yy+a6NS1|RS{d>;=jVr?A1=0b>].');
define('LOGGED_IN_SALT',   'lAe&WzM(9lJovb1LqBJ8+Uqn9O1hp;;,z_F4o7>3_-@g!vW)1_9W{TB7^syMZDF1');
define('NONCE_SALT',       '|ve$2k3!3HS@4n$y~{cEOW<j#>?g50iX?Q2fE!o1EIC;E}c^*oh?Q+[1T533_grQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ha_';

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
