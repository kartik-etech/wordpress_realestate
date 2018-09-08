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
define('DB_NAME', 'wordpress_github');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'J0(CP{aw1[X}5iA|ptuQX]<Yil2H1P1:kMyMDE^A!MUzG}0@w|)$ymcj=ejqxKo@');
define('SECURE_AUTH_KEY',  '6ekD2M#jjlZjS.@~Tnc>8N: `izNOQje0[=P#DCMH3svbb|7s8Xn1D`C6QIV&)[+');
define('LOGGED_IN_KEY',    '1o&!($~/{c%lcnx4$RR);L.LfV{Lptk2v!KWW9A}@+@`6`xHi${#@P-TnqVuj9-<');
define('NONCE_KEY',        '>XV_I?D4X9Vx+0q_(C[0Rmwuk!0J1%n<Tjb7f(rUy*_26q|48|IRf%$3l[(w]XT2');
define('AUTH_SALT',        '5Ii;Z|-:*3Ddc.2muA{iy8daHjNTly/S&#^Ye,I~+VAPfCz/^l/)FAV/9v0 p6*9');
define('SECURE_AUTH_SALT', 'ij:Vs^LUy%gmJd3+Yq!10J(x<1E.!vU9s]=Yeh]Ys2|[9Pzb&Jwo&<Y|OIV&gMAo');
define('LOGGED_IN_SALT',   'Uc#D=n6RQV5&+;b|jW6|.+S2,|wlxWtlPAOvB4tNt7Y-N*^-:JW3 T}mN<M!^mh(');
define('NONCE_SALT',       'z^2O63-t;RDEwzBMUR|-|0b(H7fz;NNcLiAc<.4l:YSm+:WR8{ HI$9Hutr;EK-9');

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
/** ftp user name or path */


define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", “my_wordpress_user”);
define("FTP_PASS", “password”);
