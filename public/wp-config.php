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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'U=0A$LLVttjx  [u=B0is4V}Ph`K7yqZ=Qs{(Y:<WCac4JVt!!&xS4<-np::uHSX');
define('SECURE_AUTH_KEY',  'F8yUG*F+xZCF7R,31YhAS0Ao,aO,UK5/Vy%`vNZ08_BKi2zL=.U6m7kCxjksUA*n');
define('LOGGED_IN_KEY',    'S))7G5E`b-xz(F14Hd?(t&5!4>1H M]K7w8b@}e*HeMNEHIDXi{ rF|vU.+<R:Ey');
define('NONCE_KEY',        'N?V{2sz/7:b!&KR{M %P3XCpz5=aQ_n:f2xK:$T(6k&B!4]ss=CHN~sF4k<sj_+r');
define('AUTH_SALT',        'pit.|&;LQC{faDm.?5L!M9;g!!X46x{XdQk#TCh<6w]?E=uXo#$7qS?*jEb`j[PB');
define('SECURE_AUTH_SALT', ') 1=Q?*NTp$R6( xb+Uu%mdCo=Bwa^!ERxW,E-?uAlNfHWa=]VP<Q_9znjgK9VQM');
define('LOGGED_IN_SALT',   'QTcYhyA2CMZ*S/,ODsl&{7!Rkof;Y=eo)*Sn;Tl{RCU?&s2m)lV0P9#CkQgMkjg.');
define('NONCE_SALT',       '/Wo,K[ix|?UxL6)9n|<Rdm|`gsGHThXq&0&CrE@##YP6.d5&orX}U&z3!$i5R]J?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fb_';

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
