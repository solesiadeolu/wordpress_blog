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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstance.caahbge2o66k.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '&=A<r|Q>9hz4La=,HDG,-)%PIsZ^B^.AOhq)-+2kLm*{QAHuW7FN&cHjcz?<a1Fd');
define('SECURE_AUTH_KEY',  '--DdjI/glgj!V(WrRfSyoqOj&<jPSyGZ`5N6}jp4szr2AD|]C[7c|+l|by4]J%@6');
define('LOGGED_IN_KEY',    ');.Mu-M@]M]vlW+YGAyiZ$lvVz_-;X/CbRw}YGrc@|VgY$,X]yS*b3!gHO2qDi_~');
define('NONCE_KEY',        'b)I%xY5UE Na_%}lCqb@{/WK~|K]cR!{ogWoG0|e|DiLCb^)y-LMOY#f8y&i@^~|');
define('AUTH_SALT',        '9/p[#t2X,<FT [~2-+@[ s3=KJj&p<O463HT?3K3=WY1ow{7+|6stnl^eS~A;2Ys');
define('SECURE_AUTH_SALT', ' uY=PcB-KSb,>d++UUhs1M>xeSMVdF-&)kvM4/H9V@-z|(+|hT<7.a!Sx2e*}6@#');
define('LOGGED_IN_SALT',   '4%K*wj#6.FOUM$}~P&l2EZ!Z/|MgPL[9!+FSOi*H>JgqGHd]Cf&ow[Be bJv5IF|');
define('NONCE_SALT',       'QL=xvJ/<+G?h_(W|je/)-/mS|GQ#zpcn7~|fS}S@6#CwgM?|Lp>JUsj+[ #X94lT');
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
