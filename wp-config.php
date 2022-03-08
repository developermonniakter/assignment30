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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'class-30' );

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
define( 'AUTH_KEY',         '.<)}]xut#l)kjh*sdmC.Go@yS>}R0_kVYM)8]XFob[X@G[NE($)!Gq9Q_S9kZI^`' );
define( 'SECURE_AUTH_KEY',  '_YQ}|5,;m|L!n:n?S1G7g*{r5NMd@%)yEyaSUxe4L[%xO]jMO3]m6,G#g?%iP&HZ' );
define( 'LOGGED_IN_KEY',    'GIwA!K)9W$1/H#~a#)=5F;HO%D~/y7vd]<,1B)Pzp(`r4!LXEw:XfP~[^@7d1OC~' );
define( 'NONCE_KEY',        'R?A:^,q%KOWc@+f5)8<*?v>db90@U>;_%Kv RKHaY$vY5N:<(oa,(z&ro+t0)WnY' );
define( 'AUTH_SALT',        'GdY)DW$SSIFYE%M|U+(72|Zq$h%Ho+b~FCgSdXG^dZfPKl^NW;)E_@4n+ I$Gvd/' );
define( 'SECURE_AUTH_SALT', 'Jx_$uMQ=3xp_+P?,V)i(8YSL9L5yZHK|}#hU-)^j@%xWF32g,p~6OG_3rd<%(SyV' );
define( 'LOGGED_IN_SALT',   'ZJUAL::>OPE>k|v:1<52w^dVVtUml~B %6ca%YB0<j|>.aJu0tg8|4gjc>80<av!' );
define( 'NONCE_SALT',       ').aqDb(q*W-m1l/B+Z?LQ^&G;}[dspB/obv0{@fe};|lwa2_nY`gU?It^3Cf y(A' );

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
