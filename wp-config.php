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
define( 'DB_NAME', 'testwpsit_db' );

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
define( 'AUTH_KEY',         'iGy0F;VrTto509#EO^.@gejZad__[(YFVIA!z*Xf:Wg&pxs=5/v-U6<n4Me#e_[?' );
define( 'SECURE_AUTH_KEY',  'Z@Vwhdv7W<N?Vy3FbpuBH]XY|zhe@oZ|ltnoQK 5dnfJTo>M 8&d(1VS{Ht!E:%(' );
define( 'LOGGED_IN_KEY',    'FMk*aTzrSJdda-.sQ?,GZj1:qpBd;@|c8Nq~jR /FH:()*(X%FNft}JnX,0/{U2}' );
define( 'NONCE_KEY',        '(]3R s;U_!DuxOUA}_[C`*_$[a~ [o2,Ut=BQ>?%BQ|`C;V)==EAsDbV[iWG~/V]' );
define( 'AUTH_SALT',        '}->VNR#!yV+4ptgi;i0[cJFAs,^A%177ax6s!SY&Qb#/D%z{+ys+BL@Nc!e/uZgj' );
define( 'SECURE_AUTH_SALT', 'f0kg VO6M~N9Ks2[!J#]].Gl,n5WOQ51CRW:jEf|Q83VqBp4%DV3#,NE6YGKmk8F' );
define( 'LOGGED_IN_SALT',   'x7Ix,UyxnQftS^.%r_FG4RkF*2VF!LAlx9O)Ko^[rva[5+Po7&2<[i)#SSh0Y1JH' );
define( 'NONCE_SALT',       'wQ&g-bM~mjUW<C(b?,,fAoPlH=|KHj4b`b%:r}GGHvn8/)P/:;-fD~VL}z=b83~h' );

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
