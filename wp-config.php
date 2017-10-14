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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'oyym@ali999');

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
define('AUTH_KEY',         '-NRc*j1`!mKL.lp`[9XsHnPy}o0{}wtAo?JtfRtL<_;kR}2GajM?k=@>Ubzi}ho8');
define('SECURE_AUTH_KEY',  '?+VEbXkC|n.oY N+ryTCi$GHeAZyzt+3lEtmx>ZJy+Kh/m6*,x2Xxk+Rh24L`Qkk');
define('LOGGED_IN_KEY',    '^kjK}VKB|!iQ^,T~guJA:@]C7kE.)2cwdKYo HUf^Aub~xk5|9czP$CrKx,T:TOo');
define('NONCE_KEY',        '9Gh^n*,Ha>N^*txT#{wXmwTOQ]Lya6Ni:t%lg .#CI%{ckZm~9- :d* Yx(CCU2H');
define('AUTH_SALT',        '|s<9T}z&9,URr.SO_+hm*:[orLw=h`0si#&{:L2i]bs>o_5L=5DLe@eYR_ZFXq6,');
define('SECURE_AUTH_SALT', '9V;m1Mh#Bh-Tf^&|mdT.Y0VSlUj!~_7?P(;U#}*,8(gi._JBn^{Z[HNu8.>nM/w0');
define('LOGGED_IN_SALT',   '{_6$WfCLkpbT+h&}sqH!hDh,D`G)%g<c67Feaz@?/11g5E]#X<a BM Oi+ Cd@kR');
define('NONCE_SALT',       ',[Xbb/M*P?yMBQl47!C2j2MKX*6;,p-Y:] 4,T:cawiP6?w?mqW%=b{j*LC.*/L(');

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

