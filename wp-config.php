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
define('DB_NAME', 'wordpress_theme_setup');

/** MySQL database username */
define('DB_USER', 'wp_theme_user');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '^7oT<q%_MXv^S|!im#hQv[co=))Sv~fL97I[(8tm1I]b1KfqlS1I*xHXVps@F^#u');
define('SECURE_AUTH_KEY',  '+sJ$$@{qtDGkMdL#tp+k&/|O(i_{?]2g0om|qI57|70]^nM.R3:ri{BejDV `qE1');
define('LOGGED_IN_KEY',    '-LA `w!f!drK_([i7sI^>1EmSzx1L_1=c3w9vDP*E/*EO*S`c|}<omm3l;UN}skr');
define('NONCE_KEY',        '|V`udUa>C2JUPNr$J91(?Y7a9;Wo<Oqc$)inu-{F?ut}MT/9 T_&|v</#*V=C87M');
define('AUTH_SALT',        'Y.yAg@+`5*LFMQCsjS)zuC*K<~ {)Th;xlRipZqjLTJr,3bRF>YIQk+h$NQTM.^3');
define('SECURE_AUTH_SALT', 'c+//V|`4VD^$3a,.!>%9k*maJn+ju*gspy<:r(GdV%0.x8d6d7&2.QO/]]Z;S~Jg');
define('LOGGED_IN_SALT',   'e:>3gyTA-BRL,z9gK<h{gT/,!(cb~y}0^4bl1aPPXd*V7]%f.rSK57#aKSh0_44|');
define('NONCE_SALT',       '`6x4Ax83 jwbl^:3zGMe9I9-D@6$e:@|,ow5Chn5A)0C3XS;pK+Z1cR}J%m/Z<g`');

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
