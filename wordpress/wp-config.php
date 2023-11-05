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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'gpcapstone3' );

/** Database hostname */
define( 'DB_HOST', 'gpcapstone3rds.cfrq1esx0yrc.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '=[0gi>t{_:uboO>i9>uOVwaJ+RjH,&k)P$[}7D)7T@XtFZ bHF*7.S}^2ECu$-Qe' );
define( 'SECURE_AUTH_KEY',  'Z!zynj<ltHmp=ulO>mTloT$P6-=C6N./X3s.fE)1C7rtbq*mF0q3_nrKRf^VIo_v' );
define( 'LOGGED_IN_KEY',    'k 4ZnyF_Iw^);j.`=RlAZz#a)}0`i:l?jM&i$kt |W7d ~]6a}XrUT1?wCJoMaB ' );
define( 'NONCE_KEY',        ':+rUut`H8v2;:St]!!6>H5X[<vo<9)?(0gGc*(;E(*xHledqtLLY-JU8Am*Gdbx]' );
define( 'AUTH_SALT',        'F_10S[lD/7jZ29&keaw%qRMA&UlX9R@L/V1QfO>.ko!g4sZl6qJb;#M<qZ.Wp&DA' );
define( 'SECURE_AUTH_SALT', 'a=SRX+jl1rGLALLpRhV</d/p_N(@3z[%KQX}Mt.0:7!UD5lJ/>!_g/Z>B&V1L]oS' );
define( 'LOGGED_IN_SALT',   '+5FIiybUs/~f)KAQO4gVLR<N(kAJ3yws_9*i@EWXVc[X]x)?r<wUK77l8gE&hXl*' );
define( 'NONCE_SALT',       'DtVH+gZ9Qh_ 9,#lM{pm18U9P%3$^4iDCUeBw>iqNf*Fsu@]mQ:W?c$N^T1_ObC{' );

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

