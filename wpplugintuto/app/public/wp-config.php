<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Qqe[/g8;.EZ3oV}gfOtzSnlmr5=s=0(({_C65pTB&FL<7Wgl=8+40-c8a)cDPmr-' );
define( 'SECURE_AUTH_KEY',   'W!97;_yCyY``WP[/lc.485=yC#_i{I y)U%YL!MCUC(|Z~ZCzpr1!R,s1U!1UyWE' );
define( 'LOGGED_IN_KEY',     'M7F26kK{TUdGXWwu6Fl !)l+X w-D@%!xK=9Y=KUis]8Ywp^;Za$}%,_qsPISodA' );
define( 'NONCE_KEY',         'U7l>Wwr&.nNaFm}XWih2 ZWLT)sJ9#|ZLxu-:BSDDBlf25`t?+[XO/ure64a7AX$' );
define( 'AUTH_SALT',         '0Ar23$(_p*3fT1PfVpf8[xZN1A0%47F$:qmcl1rgA2kpdX tvK|Xn9y8G,5En@$n' );
define( 'SECURE_AUTH_SALT',  '>GC{rEC,}=9Ss^YtBu|u6zY`*_xp(RIJS_,6hp@RLx^W!&t4/ClZepr[0m&*ng(~' );
define( 'LOGGED_IN_SALT',    'tV-Sv@QV@[cS0yrjhy<+EN*7q:3qV0C![5?oB{,{E-+%wR%9HvYdWh!M6.E]sV*_' );
define( 'NONCE_SALT',        '%FV-WyWlNv%j&{(!b+tY7wx8g9PjON!.?0r<aSu8=5`nn&ne{9[9H`jJ~f.tcAa0' );
define( 'WP_CACHE_KEY_SALT', 'cE2wGY$/`x([m(O,wE;HQ5k*]`sUWTV/$:i3u_Ql2O!I|@9!aW1tUX8W_kz|n&<g' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
