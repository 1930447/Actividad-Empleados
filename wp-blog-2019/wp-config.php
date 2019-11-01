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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c70472858688b4bf9174c0e6e9519c8d157d2a757f43327b' );

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
define( 'AUTH_KEY',         'Ck]jOd_/YDS4/lKX]R,^?B|PiVZ@7DY6MqGaWdb&T^Rj#<(>x~oz|Sq*Q))mG`iq' );
define( 'SECURE_AUTH_KEY',  '4Fs<Sa2>3-a|v;WWWUWF>m|)dpJ8N|#E[wNu{IDt7]^wnh^?BhRH!lfCe3sk({+e' );
define( 'LOGGED_IN_KEY',    '0c;~dpy4HC1[wd1Aig3#*I_/z=efmk7O2{s|?:$+.aAc>$MC ;r:6dT,B]R/kA?@' );
define( 'NONCE_KEY',        '@&gRR``SyDdQQBtm^L@Wyd7q$Gb>M5Zu%YN-=4FIAur,m#p}CBG3E &kZ?~1iLn&' );
define( 'AUTH_SALT',        'kb@Y0=G18$YxOCpxbe ke<Ue.)XbKzwv6tJIG=EN;;O*qiB/8|n#pNM/]DLseBCp' );
define( 'SECURE_AUTH_SALT', 'E.Jl6qI9<83W*Irf3d}~,/Z2Icb55!A[QZ))>F0SX ~`N*]0EcKdDeb_QmmnL7,U' );
define( 'LOGGED_IN_SALT',   '8<fkUZloju ~s!Q25@5+mUpVmOxk,?_7^*zgu(I9 7@eXJ=u^HiSu>6Z=lU@uJo[' );
define( 'NONCE_SALT',       ' ]_Q*@30o%M6v]Yu0:B^~qYzJ>-TTk%^q6rBuvA}D^1P)X<Dk>,f3?^=$cVK`W0A' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
