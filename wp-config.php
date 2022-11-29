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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Task1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'uW>/IzUqo:CI=11>E&4!^03oy<)Q:4f/s(0h9jKv+4I%3Dc2Rz~x^&E6q9*dQ?$G' );
define( 'SECURE_AUTH_KEY',  'o`}B)m[YWkMq(b<6UhKZInVog;;~Ytv4:=%uv|(bI)KIg0LM^0f:AtD<v[z8S=jM' );
define( 'LOGGED_IN_KEY',    'U>L*lBG=0`q7Y2D95`NApe[yYDkN`FekpA$G,-{NH^G*T>26(n62`pR`!$=UPCHR' );
define( 'NONCE_KEY',        'D*AJN[ 2ZE)Hz;iJi$b?;/NPvx8=W(#}U9s[btTs7%yG09DD>*s!a`-;;gE96u>@' );
define( 'AUTH_SALT',        'OPy%0|bKbcJ QjEln:,I(E{E>9kD_uu`tNsxLLJetU>tI5ROAj@!uPNb5U5!+bm,' );
define( 'SECURE_AUTH_SALT', '#caxpNLvMV6zUR{*^eZ vb$^XbPn@o#$BECm7c6Z+]XR^ZEJ;j5phW9p~CpV}?v:' );
define( 'LOGGED_IN_SALT',   '<C6QAU][=Oj^>P2iPM(QzR~:!OX]SMaXUdI4L4(P=o~{5PBe@<B~]#A`13VC0+|[' );
define( 'NONCE_SALT',       'x.-D$P/`&Fy=%WBw`~]SrsOACxHn,uB}ILQSj?Eu+v%>;(p$@_*.@_0bKNT?1ize' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
