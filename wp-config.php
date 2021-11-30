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
define( 'DB_NAME', 'exo_portfolio_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F}v7HR38:;XzfeS6CR6X S&)b+P;ooOB{DPV(~E$)=4Ond^D7,(Q$inA/}tNW.M2' );
define( 'SECURE_AUTH_KEY',  'SctY.r.0bSZ150JHpGl,Kkrh`_>~;vn7fMSv9weefh5@sz>q>:xwd&NF6d%:&pM|' );
define( 'LOGGED_IN_KEY',    'KxwmbWt[O2DQ]afOL}Dp,3e)qfHSw4l><fq`9_!y;POW<NnQdk*S5WZ]:}ve&V:m' );
define( 'NONCE_KEY',        'XD_kygtT`(3jP.aD8B4+`<tlix=]s:P2e2sR#CJ:/$SYJ8|?53s~L0tob.WV$?JG' );
define( 'AUTH_SALT',        '@9Wd$ZTju#7h&K1`Bc5wV_4ITDY.mm:#ew#xDzX~St!*?uy|AMYKo@.Z<zjj%{?)' );
define( 'SECURE_AUTH_SALT', 'ON1|9)/%y/(w!:;=yM`EppO8eIWjjR?2d7uR5Ni@aPQ`3AKci7 S0O/q*>5F0JJC' );
define( 'LOGGED_IN_SALT',   'q;~NRr0)S8C=mU{q?^$g(y,FC]{ bAdiHk{rH>cE$@-:YwC4X!F{|VU$m<R`R%@^' );
define( 'NONCE_SALT',       '&wcOw^i[h<~(2hj8c#eNEE&[DlTHE2w=9M(`zUa iuH}a[,LVF[dk~RVlsi)Pg&_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
