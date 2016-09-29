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
define('DB_NAME', 'sanjuansurf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'helium');

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
define('AUTH_KEY',         'MafJCT&v16Ji=nw6HF!&zntt~` U_R>~9^.R[U/K-]22-|*|y+v#rY8+ ]C!wmFT');
define('SECURE_AUTH_KEY',  'S3?1:{1zX/2&=wK=^Z4EA~0oE+E35|M`n8<!+rBE|4E#m .aQp<cD@@x9VA s4yx');
define('LOGGED_IN_KEY',    '%6TObUhc},Gl^iQWZ;- T0pz%jR<6>T:Aw0$9 :>- :*Tu@d~5UA^:q4biZDKQr|');
define('NONCE_KEY',        '^RCF*Zu-x_at]57$R0V5A}MX3);1SmA2^-ZQJ!XG7e@7K7<^f8F)A:hJ_EhSemi9');
define('AUTH_SALT',        '4ie>A:cP4Z@l,Sq}XX#?r+HK]Hg4r%A:+B;(NW@|nL&Z}Kr0OhSf+A%WVop^WGHf');
define('SECURE_AUTH_SALT', 'IX.wn;r1Xt&F@;7`tg=!$uoIYb,RKtU<e_ #4-xKa! )gYmYHg+pQ+:LN]T>V$9/');
define('LOGGED_IN_SALT',   'X4vEC8:W+eU;-cSV@.y|:6jLPI(Abu+--`h| EYZuzZ-{tf0@R.+DBE`haVsaPJ~');
define('NONCE_SALT',       '8P9.9;k}(@$%#N.H,j hE20aCy:?qO2wTb`YFTu_jR|H+xgR?E|5cEwEk+[ihn|~');

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
