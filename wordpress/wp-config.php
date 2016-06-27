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
define('DB_NAME', 'church_wordpress');

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
define('AUTH_KEY',         'r1EbTbDyI4G|(*g:^IJ4t,(u0RLEDQV*`l,Ij9vz0w! 0=&+&(jpQL{n|5nk[{ve');
define('SECURE_AUTH_KEY',  '!k{&f2W![)+XmyLDESLcrvBy7J^lTi]H4dV$xhW9xJ}Gsx,}x=cWN?fVE`<FX0$g');
define('LOGGED_IN_KEY',    '* XI(=!*A(>@Uxg|6aX3UK)bcmq`WqT^dY|he-la5oMG49Yd8RXu=7B5>FXMPf#G');
define('NONCE_KEY',        '30<xm{WoOHPSF|0yDwhb|%#P=`WrXf<pB1uG%%f:DS]>h205hJ#COYku[O78;T>O');
define('AUTH_SALT',        'rt:k-BuR#3^y_`] kSZ.q@D[j:PJ$Sw*m#qtg.H#|( GE{D:cTt2?a|2YM%b-WGP');
define('SECURE_AUTH_SALT', 'q|v7HCCe}a7fGRtD)~Q 1S )=Rca5Vkr#{N8sW&z^qjT:!(,0I,OYp7,YwIY9S,w');
define('LOGGED_IN_SALT',   'dVn5A7WRPFZoWx71U_}!eO/d:grXco@p[`!R->TapmI~oS4.A5]@IHFmQ1zZ!y(1');
define('NONCE_SALT',       'gYqJA#t0w]4TZ9BiQ.]XaWt&RnM$E9j}=^@!C5hpY?f3-;T]<B4@t?myTiR3UC08');

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
