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
define( 'DB_NAME', 'phpmyadmin' );

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
define( 'AUTH_KEY',         '$m}:q~fn>>}>S?Du#k{S#xiSD#Sn~!g_yq|]+K/wWC~[;yrnl0qbKJ]4rQP:8aC_' );
define( 'SECURE_AUTH_KEY',  ',l+;KFPCe0fO}->0l~.2|M<h|6*Lv/@tE^,N#os5=e!U QW?Iaw,LwatpV2Df!Ls' );
define( 'LOGGED_IN_KEY',    'J7YEu#D@K8*L 2_}]r1nuPj[ETYHdj6qI%j8|Qz{HX<Z) Wl;s:voM8p*n9v!EmC' );
define( 'NONCE_KEY',        'DU8_]cIA!R.()`pbx,lc414+j]OX8>Kp0/B5j0sN<I%at$4:1VlJwHS/[!YPMleb' );
define( 'AUTH_SALT',        '~S5}O*e*aLGUXF$k3-${:Yiwt%+g]s7XK[FK>,roM pN8wPc&B[!IeNG2)c;}|=w' );
define( 'SECURE_AUTH_SALT', 'T@=,MYBCQ*+bQ|pI<MB%fo H& bG~,5;{Dp*B`aJw*jU}4zMvHnC/]EvVC_ !:>u' );
define( 'LOGGED_IN_SALT',   '52;4zl3MBl/h]a&.|XUiUI0Q*_bt/|dJ?qe4m<$R;-y`3}7`z)^5yUF;1eMaqnyr' );
define( 'NONCE_SALT',       'ZJTV]$~bBnRrfyDmr3U313C=HKFzx$b?z0R}i`@4}C#[+dNj%{g@|e:TP[GfG.h%' );

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
