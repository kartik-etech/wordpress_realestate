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
define('DB_NAME', 'team_magento_wordpress');

/** MySQL database username */
define('DB_USER', 'team_magento');

/** MySQL database password */
define('DB_PASSWORD', 'team_magento@123');

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
define('AUTH_KEY',         '?}r)W,%^TS=%gqrfKesWoJ^ GVyK]k()8z45AqPW_[*l`07D;i};AY5JhXGad t~');
define('SECURE_AUTH_KEY',  'I/9*mLfS(~AugwMh-R@1#?CK?c[FW:[IUX})YM?)xiAV- ,sSf`-4i_6hr|aO?dM');
define('LOGGED_IN_KEY',    '$X)2l` kSE3oH-5&8$x^B[mI0h&Cjd`nnKfNw3? YX%g|joGYJlK)f6eCCy>@a@G');
define('NONCE_KEY',        'clDr/ijjNy_y^XDkY8QIMFD:{dhW uz9Oa&7*a^=r(Lg {+y4gF)v_U,f]6zTSy|');
define('AUTH_SALT',        'SLN{BV]=&hlc^{Hsypjh$=;bQb<G15&vXRM>nsih?[$+MEwwQeb$kO?M!ZKKjC)>');
define('SECURE_AUTH_SALT', 'q<3a`GL{=du|8^rl,WhS?s,J~L#A`IS5#Tc(A:3(/H`?B>WZv?4snzlw}T4w-Fld');
define('LOGGED_IN_SALT',   'B,%p8/JxY=r!%G1UJt4v_2duEr/<d>jhjMqz3]S%l6`wfm{zAI9aCuUuq8tZU<#N');
define('NONCE_SALT',       'Ir<ncG~ %Q-Z bVh?Xv|2>lx}]{XVQ:]>ZQco&522Jr3BUVSVI|L],aaa.,/SSvN');

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

define('FS_METHOD', 'direct');
define("FTP_HOST", "localhost");
define("FTP_USER", “my_wordpress_user”);
define("FTP_PASS", “password”);
