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
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'wordpress-user' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

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
define('AUTH_KEY',         '#ML<c5]_0ww@E&qlkzg>#G>>JcplmId08bF4f}~B_ha8!M-]1Lj1uRhJ>2)+VigX');
define('SECURE_AUTH_KEY',  'XI;B+^.9zyN%}9**2CCvJqv/;t&wJxH;=F/yPqXc.ucYl,J]zw?Vow^N(Y4{{F#^');
define('LOGGED_IN_KEY',    'w^OR_ -9:qp#cAad>G>:~2~R4q+iFaR?zjj+u7i3fj3h cZH*OA9W=+]a>g|.:Cf');
define('NONCE_KEY',        'b3RNv3%IG^0$e,8wFAN9-=yda%do?Icy@;z4XI(CKDCOH<hZCS1})P:N35,|@)oE');
define('AUTH_SALT',        '*]-,n]kEl-Rfq<-UkG+egw qiXZDtI),+;Kv@v;x.Q`u:kQv$oj3{va=Xz-h{MfZ');
define('SECURE_AUTH_SALT', '.k<+->O_DB|6jYl|x.zXEVvRZBJe[x66(Q)` igF<Ih0_-+REU,p:<7a|gON0&JE');
define('LOGGED_IN_SALT',   '-LqLW;{af }N-5O<T*7`hI>7mlEYvL&/FksVgIz@`d|i8+Rn=[9n-Uiahh|+.Ypz');
define('NONCE_SALT',       'Bq/`W(ALT]pDYZ:o2C=vjU|jE{-`VVX$r2qna!y),|6{E(^}jB0|+r0T3Fa.Y0aa');
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
