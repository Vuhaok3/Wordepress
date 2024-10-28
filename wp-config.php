<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qldl' );

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
define( 'AUTH_KEY',         '!/7Yl[9<@Hp?-mYwE<,s4`BBYa#Ek=J~}/eT07lWljl+_+CM#RlY(l9cx.?.^ZS:' );
define( 'SECURE_AUTH_KEY',  '!Opl%7A`(T=K:!dQJDV#4W#4(;@4*E`cV0a~B2rdm3Nevz}_/4gXURx:LT/.!_J#' );
define( 'LOGGED_IN_KEY',    't$/C&wD!J_Uwf}%#FbT}CfXY<$>Jre*ONpBo4AY>dXvz?8@TM1(goq%PVVS 1]lG' );
define( 'NONCE_KEY',        ']z2tNM7_cR/khEQ}]n#Y~<~JG<n<$WIl~R){b`b5$iG$,%VD{Z$hZ2<b7A30$3wI' );
define( 'AUTH_SALT',        '&S}Bi6ESSL!NyJ>o$`3.au2BXp7ktM8+.)4;}0Z=ZuRe{m*Q*`.<(^}0O^w>TB}X' );
define( 'SECURE_AUTH_SALT', '2LQ x~Yl4H`B6hTxitJPl{m[xJRgot^*4v*]/au+k:!V>UL2`w3oL>@%pMr;xc(~' );
define( 'LOGGED_IN_SALT',   ')jhcTX^}J#wu]O?GeMOx;FpmeH$a1E|i6{6]ek_R+jNlv&7&PGGlKzqB%aXZH?@1' );
define( 'NONCE_SALT',       '|b3wA]M!/mWtWK#3B[<-jP/gy >_j2ja?>CDJ+ArP9OdSH4/@OJI[g[#m3hBF-qw' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
