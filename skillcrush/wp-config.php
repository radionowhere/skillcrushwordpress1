<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'skillcrush');

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
define('AUTH_KEY',         'x+|sg&OO_2qInB.ojr5aY,`,[D9 ~^3K+}#`kzd9H:*pE%MpAEzQw xxCkA2)e?]');
define('SECURE_AUTH_KEY',  'IX6Q^Zf>mpjT-( 3q>mww#><P|u)/96uS?4*E9I4/Ay/GthlnhybOXs J0ldmqS_');
define('LOGGED_IN_KEY',    'thfj2*ye&vGo|d; -hRHrx@:@?!D|RB!DFZJMZxR}oe!A4Ot5|v.n:xOmE5i:B|]');
define('NONCE_KEY',        'G*$:<vn@Tj?Wk[D]ui<5XLI|3{y/++Tu+ka@ODgw<|G)Gi*DcF|sD-l+SRttVc[U');
define('AUTH_SALT',        '6(~%esB9uk:KaZ@)NR-hlPb8MEL78fr2YzhxCi})l>R;m}i.Ld/QS3$E|L/>4I|4');
define('SECURE_AUTH_SALT', 'tYKOhc6|m6969oX)|6Btm_`^]>>$Afh8/HX?2}UAk=;z7?O`xr3,4< j(c!txG+w');
define('LOGGED_IN_SALT',   'WgloF;/1;#u|aK8~jVU?XEz*20-FPFY#6FI?~nBmQ--eQ~Uxl%E93P||V2dyETs2');
define('NONCE_SALT',       'L</gP|)6 )uTSTNxQ@6FCK;I,_Sc#X&T,9>7`lgE23y_)jo%@,m,mVOjM|=~?aMe');


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

define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
