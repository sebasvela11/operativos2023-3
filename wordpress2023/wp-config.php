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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'sebas' );

/** Database password */
define( 'DB_PASSWORD', 'vela112004' );

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
define( 'AUTH_KEY',         ']8)2!K)|sBI-?XU&g5u!R3TH4by2x wjz4fG}Z+PV0R8*~S@.$vy&s]->pGbrhl#' );
define( 'SECURE_AUTH_KEY',  '][)FYTY<D@D}`>+u._{oLbN<InWp|wkL3eyg4+%33gr#B%&pt]W}v9,so{qW<a.y' );
define( 'LOGGED_IN_KEY',    'F3:|b61I75q3]]ZOx[aE!!}>~4e(5ti_j}Ii!=bHNf<Xmc4InQ.^kHf%=c!!jjIs' );
define( 'NONCE_KEY',        '9,x.8.o9d#4yCLJ#y+}9s`2p 0moV2Vl5_Dm~+3eSC.oX-uOUV^#B,<iP,PzPaT`' );
define( 'AUTH_SALT',        '1@j((M:=vHe,^|N^ntFE0]DNj~lbkg$k}N+7vmq,7USn-nZ[:>5,],~c4[EMaICl' );
define( 'SECURE_AUTH_SALT', 'H7jR[}Xh*Z7Ll_7,pPS>[Lk`y?j=.,_+x85EF0|FO)E?etcRu5!^Y7fveyY0w~ai' );
define( 'LOGGED_IN_SALT',   '4CT6VGCBzxWU=0!!od?4e9_0jA;+{6E?I#xI%`e$%0]k`<j{1m5u|AvNYjI^GPG{' );
define( 'NONCE_SALT',       'z$p9IU.*>.KC@G^UkpFCcP+8kP*K=X7p9#{nEQ)F45^8~cXoxYcL9ta:F!c#bH%,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
