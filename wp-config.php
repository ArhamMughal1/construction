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
define( 'DB_NAME', 'construction' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '1234567890' );

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
define( 'AUTH_KEY',         'j*2iG;KH~oPX7@%BjR[8AM-/ :{K$v`NqsM,y?Mq[v|S;}rY@=I9{4MQg) +<0n ' );
define( 'SECURE_AUTH_KEY',  'PaCuNVJ8$Jt:<N:5Sur=6s~.TK2$/3Y)wjKF8 ([}neolm(l:+?2kU<0BKSe20t&' );
define( 'LOGGED_IN_KEY',    '9_}^ Rk/TX-2aRq<3dlj#-wt*.NDdFJGuI/cTAD?{C](:EljqS<ak,*1+,a*K1%L' );
define( 'NONCE_KEY',        '46Bzl: AcS10V>-nwD&{CEtcD$y#)KrU&95ubB3OabjM4Cu}*0}s|ReZmfJm:a^k' );
define( 'AUTH_SALT',        '?(<eF@u*.t@?6[|6504r[m&MDbeF,FPJAnfr?xap/jBX(&lGOX2lrz.%L`X]7~6y' );
define( 'SECURE_AUTH_SALT', 't[3FBczo)B$VsGK5$BU5[G%[Jo*+^LK>slX#o[tP$LM|xM@Z Dn/xZ).3g&zz53o' );
define( 'LOGGED_IN_SALT',   'M<(f4W, yhCg5,iu+xXFcB!7o+A2&;NWJ]~EAsO(H%AkN7*H:#*gnD@g o5p=(%`' );
define( 'NONCE_SALT',       '_>$%mj~rnl#kO(;kv!W11s+S9=ZXr~8i!p{M;4:^ai<!J(V51B>i~seuV!m+^7+/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
