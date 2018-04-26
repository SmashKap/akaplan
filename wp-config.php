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
define('DB_NAME', 'akaplan');

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
define('AUTH_KEY',         'N[hH1`k;,3H<NV_#d*,oIpxLZ%06.@os)@l>w*0NfW*TDV+Cb%=^?$}J%oYZP^)L');
define('SECURE_AUTH_KEY',  'kDqr%[ichI.I@CagmRI^h9^udbH2k6 z:|mb>%?<p1~ +f@nH.cQG=7fJOG_lqN[');
define('LOGGED_IN_KEY',    'W^T|XA*oVui$e=u3c~bRo|R+DN5PP@>N$#),sq>Ql9;FhK_d4l)zwb|2}ofK-Xr]');
define('NONCE_KEY',        '5jX2sT`.lW<{}F{NCl^,,f?e&?L!=N`h+[,T-N5uNf~*[b`Q)V,B(QNKX+&/*HKW');
define('AUTH_SALT',        'KPyW_K#h}crE{hmR8dU9L{)(vis>%gk(GdkcC/n+(D3-R7GF`h@]7_9;-y#6)BLh');
define('SECURE_AUTH_SALT', '5Jxlo?=f!k0=Ou-*gohz7+r-i^4V=Q;Kc9e^@|K|*-jQj7N)IqF8b`- J#JO3o>(');
define('LOGGED_IN_SALT',   'HI|buB5ckf^|@jTnc5vv(v4#JHv.siH<Ec|5(g33+NK9syL|F^]PMt}=yIK{dOQ^');
define('NONCE_SALT',       'C>8Y^60MqKo#bNa@Ca@RbGK+^ESj=dH>]&k$dBP*)?3ig[pJ&|=Z*7ry((aXq--G');

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
