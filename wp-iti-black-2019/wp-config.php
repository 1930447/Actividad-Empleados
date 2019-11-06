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
define( 'DB_NAME', 'wp-iti-black-2019' );

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
define( 'AUTH_KEY',         '{&;?p4A7l4&C7,ZyNg>2c!sdEnW^n=_SbHsgZOwC(`:[qK;Pl]CxW#,IsV]bJRE$' );
define( 'SECURE_AUTH_KEY',  'P/FigjqQ`eBJ#f]E_+J.>?%VW2RK@SoxU1E!BIy/Nd3/nrrm-|UIsp+%T1=jvyuO' );
define( 'LOGGED_IN_KEY',    'u;EV>_atacS0j>LIgn{/sf|u^#g?v<P,)Dmx7/[k0[$v8/7w,L _Z7H:_G4:z6OV' );
define( 'NONCE_KEY',        '(xAJ,0^V?:8v[`k^~oMcp=maEf0s&5Bu=BqhcKjYy 7w2I*xV:K]R2gX4JMBf:uK' );
define( 'AUTH_SALT',        'b&285<>sC123/[:xj>)$0x>RN*Y$I48jpQbv;3&-z+KX:_XIC{5b-aT^*46,e=w;' );
define( 'SECURE_AUTH_SALT', '=~G 8MT4Z,%l:t,cB[<IGe45@ JfiQd`>E}(QV5/rCOdkLG:OR4G6&dsM%*G:7 g' );
define( 'LOGGED_IN_SALT',   '8WDrLbtRW)C9gQhVm ,#kH/aO8acD0BUdxqK[l e%gK.vptS[8+f]7I]0  *Q+Op' );
define( 'NONCE_SALT',       '=4%aI>)/28lun!inv1W`$Rsbf!H5Ci@S.w]a*YV7(]WmE^ pRe#Z~N;D6PtVcoO/' );

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
