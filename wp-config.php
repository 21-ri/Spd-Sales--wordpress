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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oil and gas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',$P04+]AG2$a>+p{B%g3~_<?@p{jIZ0_G^k$q5qZQ808(Rvb.YL1BiseNIo^Ah|I' );
define( 'SECURE_AUTH_KEY',  '.fb7DI*HW$0gt$T?0I+%Lz/|g$-/hqC)V `BfT@P8*RG**ARuuB8CW3oC]9:<|Ld' );
define( 'LOGGED_IN_KEY',    'zA7}sX:X3qbW==I#])7gUX*i3,sZ+*LM<>i=o~Dg%L)0l8,j(I_;!4F?870q s|n' );
define( 'NONCE_KEY',        'bvcg,6?vcX|/oxGt$`uD&$Ddp:gyTH}oCyk!:l^.O|<95AJ L!)lnK93x`Z;LWTb' );
define( 'AUTH_SALT',        'cZ8MlkTx7T[V,GHQ,<-Tpr1((+~lXW~C[e-+~p~V..J <,2Tle>O.^opLbiMwx;U' );
define( 'SECURE_AUTH_SALT', 'cXMJ78*?3{u%Z$HTG[o4=okSy_h_zKAYmtS_8QGqS&fS_kWi3]rz>&u,}_5RB#cb' );
define( 'LOGGED_IN_SALT',   ',W>U X}dl%1u]_z.9Y?T!QjbyO~6S/LzyL;Yy+|b1=i[vRhm40<-f}>r([aJ*%1u' );
define( 'NONCE_SALT',       'nu:e(:iTJ^sXs3{icS!x]KR*zD,3TvfDo{YH@@BUcE iM}r++0ewwjiDcIJSX*XH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
