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
define('AUTH_KEY',         '-uU@QES]V&V)$#+tz#NC]^{M<2wB*K4`11+IFk+IX{U}W/Aku`f{3YG!7p}KB/]|');
define('SECURE_AUTH_KEY',  '0)H2)^)+2 185hL|,N8RCY]YDqAI6@+~0*$D^{:V^-rRq&JIjo_yPAlSW{8dDwk!');
define('LOGGED_IN_KEY',    '_E&DEIyI2m)C9,G$m6~R*#=GEV#_? pwX70mNOE2nmg?rsA:%L6C`UN_ O8Zjand');
define('NONCE_KEY',        'Y$3%1 a|M?{=!VE`a}AYFJOq:VDo/Nx~E5I[M<}A2]G^8>,f=wN]q>1KvQPj{Sgw');
define('AUTH_SALT',        'qRte;k&#:`Mhsf+acHT`5PoEb1YBw(3%&EyN2T1OY_{~1yjzKTvv<jxjiD2Uk>aU');
define('SECURE_AUTH_SALT', 'WKF?!hYOZR/rm[pG*Vj9Y EuJmQOtAib`w]%n}F(1Z_DTb*UZsHn4N?m@?qRW$kX');
define('LOGGED_IN_SALT',   'T!-98(S{q];lx8sDJ*n9o7@;~-AX0.ud-4`~Qx5`3%gS}-De7#zdsqKP--~^^U2A');
define('NONCE_SALT',       'O>hjo]k_N2m^Hq#z,5TWWUSJ+BWRK%6Zlo7SGRZKNnz?wIRxkc-^p3q&]udI@ T:');

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

