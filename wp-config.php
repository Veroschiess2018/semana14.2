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
define('DB_NAME', 'desafio119');

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
define('AUTH_KEY',         '&7}|;1wY_i*R=>%Z=g?s)3n3`_{Pp[x/PCqnbBL}Q &hO(WR5K?*SotlfYi~d3#!');
define('SECURE_AUTH_KEY',  'wVy,xWsw[5H.>b7=yMno0(,oJbmK.iW,&8_}ex2k LG,ik)gQ*K1hC55G^[,C|#s');
define('LOGGED_IN_KEY',    'S=mcA+q1|/@_u&QaM~#y2EJB 1,d&e3SOX+{2>.~$Fn-dU,jyD^TLu|]~g96vhoE');
define('NONCE_KEY',        '$Mb5b#`)m+?4<aHIi~ 7J+ew<-5hA`3DvYf!p7}GT&AyIS}8G[Z]!rk5A9cP}9uU');
define('AUTH_SALT',        'o .~k>LG,cM&>)[|K*22Pw)F;sUL|A73.KINHq0aS.Y|dv3F[RB:a@E%q#u![!*F');
define('SECURE_AUTH_SALT', 'K*R`wB<T@+nl8tvRNtE^NtGi`J0c_m6~+IDQJghL*:~Cv1TO#kjYB&;_siK,yH Q');
define('LOGGED_IN_SALT',   '#aO0igWa@3oY?Ve$%k2Q._hv}A!vyB|9eFKTx!neeA|qU>nRQi/ftzPSH7]+&I$[');
define('NONCE_SALT',       'A(W}mw6_[yee`-G(,efq=/t2A;+`_W};{R)J~)A)GH:l ?T<My237bz8G5ylPj(Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
