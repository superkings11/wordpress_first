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
define('DB_NAME', 'wordpress_first');

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
define('AUTH_KEY',         '`|MZ$BnP5=|#/52$E4(>E3TGR&t_B(iyrG1=oA-:`<$@xnOIuJV5{P12v:6cK^`;');
define('SECURE_AUTH_KEY',  'e@H=KyRF0=glr9rrn9a~9YYI7OtW8KK5{%M.~:Cs{LS*hQjt]t~#JH6CusR*(XTC');
define('LOGGED_IN_KEY',    'x0)6v90GBN-HoGdc/!cv%dDPw;Aj6JHN@p:]Ob5C;Ik]n$[0aq=W!7I}v9`o(77G');
define('NONCE_KEY',        'z<13z!Y=:gD|rYxK+~;8l]Q4Pgs1q53;SWo br=RN,(y%7<=/mm9&*SvJ-ln&2XM');
define('AUTH_SALT',        ',/M!JhCi=6A$|G`coQ29wi.J.m|.&;9{/PJUNiAc+9&GOx?>e?Ww#b#SM{9#4Y;X');
define('SECURE_AUTH_SALT', 'IzFY0{J?w|1J;dql}5XfDV1mKkj .tKwQ?%P31:jb3_y~[3nn)$6l?Aw<X<DVx<&');
define('LOGGED_IN_SALT',   'jjTB`q8GHZoBa]OOJ<~q]8OoFhk``+s3{@cQ;2][i|#EL4# ##Wr*;{N&R?EbAmB');
define('NONCE_SALT',       'W^)T*VnrAoRy:XCJ.?F)/oUE{i2%&Md<jLWz}`#+4#yB 8l~DwHHF=lWNas|K1Wb');

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
