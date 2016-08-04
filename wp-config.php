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
define('DB_NAME', 'leo');

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
define('AUTH_KEY',         '<L%YBo:<|_,FFN<SMB>1ajL0H@@$5U5j>y]X{[[O:%8LN>?Nu<-k%KzywquNCY7%');
define('SECURE_AUTH_KEY',  '[MhN.llw%mnWX}Ol,m]vwIFX-86zwiN,O>s6}Kn`4^v-LY0w(hi<20J6S,A1FuWR');
define('LOGGED_IN_KEY',    ' ?H`[Nt-f%p.MZiX{H,dvg._-2`}q,g<CrX?r8<cy;NPtBojq:%O?-bX.L[N~tqv');
define('NONCE_KEY',        'bQGMyiR4DX9R>[j<ObOuW_G1=ViD-[e!utSqrarhW9DpIi[^o+l^dMCWlK%:M!(F');
define('AUTH_SALT',        'EAahr}Lr9~U%4t>kWzQ[xi*y`UOaG%v.9x-#Q$SEp:(pjDO8(A8_ &noT{-q.jmd');
define('SECURE_AUTH_SALT', 'm i^H[<y@-$%0kL&_@c;/+dm@nG5_a{L[rCQ-k9Q*@fn+7acI:}c%Q(x=0H]>53Q');
define('LOGGED_IN_SALT',   '/MryNu];O:)y]{! =Ax- =uWHp*!|6F/P?50!]_|)-[ur^B,BJ7I./W@-cs/`G6`');
define('NONCE_SALT',       'nVr7O/FP+akV/B`}?|JZECVjD|5?rZt`jb%9Y|&wm-E{^V=*uwHRUrM+@5L>DeSf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cafe_';

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
