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
define( 'DB_NAME', 'principal_metrogas' );

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
define( 'AUTH_KEY',         '0}{7Iv9k&96=Pjr^peyTLC31NA6t p%eJ_oJJvy-Q(BW@6PSikYhaywOL5 ou:[6' );
define( 'SECURE_AUTH_KEY',  '|>|@a@I:I=PpraI5M&Q479s0,#$+U`$Jt6jY.^z-%P@}Z0>YBI,[CU:E`l-_r$u,' );
define( 'LOGGED_IN_KEY',    '.BK*p%uZdjRz6n8,;IipM>x[o|2f1dT:u,1G<aaXc}r0Eb<KM ,K7)/,L52^nsv_' );
define( 'NONCE_KEY',        'Q[jr}Xahmp_IWe/22$35+y4d9;Y|j2Dl]/FkuWi(j[,bfE{I;}T-G:>a=V1~E!lv' );
define( 'AUTH_SALT',        '`/|Cwb+G./u{fE|#3bKG.RLCB<5FLnqWtQrt|63o@IuJb6s1C Qq2+N.VTH=i7PC' );
define( 'SECURE_AUTH_SALT', 'K[^;O.g7 )$/9A)J oOmnp.>3+3V#(Jeq=nv?DTIkP|#ixCFrpR!i:Gk*Hq/d8j3' );
define( 'LOGGED_IN_SALT',   'Kp,yzNJ!3g92y(j8dmk[MHIRq4$jz+2wec}`&mKA>&=|=TX [95YH)=wt?>7!ut{' );
define( 'NONCE_SALT',       '`:[77MZ[Mf]~64;]ain!;m#je7&GnX)x2xb{j)5h!7kGNH8krxOx#6mYC$,xjDR~' );

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
