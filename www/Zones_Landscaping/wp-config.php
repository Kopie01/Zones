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
define('DB_NAME', 'Zones');

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
define('AUTH_KEY',         'I);87y}rh[+7mX#,9/N|4!;Jz+FR<qVAT%0N$KA^IXo2~VF4t*@.W[}Y uJ:vFr8');
define('SECURE_AUTH_KEY',  '3zqPpnjy?fl6?v4_@n(t,;3`/&*w)G)`,X>z,9GEPO)i)8(x|E.tF`]t<1sQ<.In');
define('LOGGED_IN_KEY',    'J9R`d1D|7@$FIDBVVQ{}wwCa>O1^#XaZ c5F)E0cSZ+L~9 REP/ND`4Ci}d}Jt5v');
define('NONCE_KEY',        'nlhRU6Rbk<m,zT]<)$H4Z&W_V&J/KM$bh]6{o%MzN:}0OlrDtC30-ZGsO,c:I26y');
define('AUTH_SALT',        '=Q&3K$)Mi?@{Bu*~|V:?H)hk^l_ZO5BOoSSBr zj{QK;JK63f:L^n([ooJ!&T.4a');
define('SECURE_AUTH_SALT', ':6K6/;y?+k}fQ_4{ANI#HElp03)axoc^-LhJ-> n=s[Hy|($!t{(zLfgy;uxWZaM');
define('LOGGED_IN_SALT',   'FS+Id*}u,0O!S#dcq>RDU6 q>k{{FIl=ApVdQ_RI+Ft3D`D*z?LTUgVF$xe>!~1a');
define('NONCE_SALT',       '_~F6c|whhq_3/0A{_3o~QQnASA<kD,aCw_NNB#,VFG;WHtd{3=)L[{Bxq`8Y:&D;');

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
