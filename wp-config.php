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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lrnschool' );

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
define( 'AUTH_KEY',         'DTb#x&Y3!$S{Z^J=w:}<*r<l2R_xH=2>{7yF!=uDmdhK8z]?oh{ZCSolJ^U6k#;A' );
define( 'SECURE_AUTH_KEY',  '7<<m1g#wcZ]{/9%!|br}J).AT>K/ZKH5A(gJqam]W5$}Gtxu+InJGF2t,)LN[85a' );
define( 'LOGGED_IN_KEY',    'eO.JAq]UT:yq7CUW#Gh=ZyXh`xZqqvv?U@heZL6xRNUZkx+Jo+keYVXOrqm{3xdm' );
define( 'NONCE_KEY',        '=820XyHm#zqh+`7*]UkDH.B@$wZu:kyK8Y=C!XTVpv23NEghf`Qi5XVTV5TQPT7]' );
define( 'AUTH_SALT',        ';IjPlQM@<.EiIeQ}k8 KJ>sAWcOy{2N!Ko!^N/w*)q@7*`L[LqKN=!|NrD)-rSY0' );
define( 'SECURE_AUTH_SALT', 'I! P=ain@tZJcg.cQhYO?06l?X(q{Y;:e&-:MQI:Vr2|ZL@Inbt>1Zg15%Z6Dzu2' );
define( 'LOGGED_IN_SALT',   '<WcBYYJ?*acA=&p<  L0@2+ke~C%B9EO< )^?-!u-i:/th0cV$}JGDRFsk,!kA8L' );
define( 'NONCE_SALT',       '^i9Y0drkJMFX[]/0/)sXeM$.`Q<~YVpjLmDmd=Xr0/D^YrGyFuxf=Oss~XgAr,Z[' );

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
