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
define( 'DB_NAME', 'dalton' );

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
define( 'AUTH_KEY',         'lxW2mf6Pf)f*:W+7p^TRoy@lWAH`fmw}Zp>MRx6`S(T`<X5!IEOT/ZbzC$~x|a3E' );
define( 'SECURE_AUTH_KEY',  'u<d|5d2vNwHaxY cw,BXLEn_E(nFZj$RqtbzD[[p9~a(R~NC%R~H}y/ )xA,=3nK' );
define( 'LOGGED_IN_KEY',    'Pb6Y3lV_leg*#._ SR9EkgOqqKc;P%[_0 Jgp+G^rjPyMfLNg~L3Kvv$haSenzKt' );
define( 'NONCE_KEY',        'T,;-+ncuOj({z+YOKM+n}XFo`K>fF{3L,#B0KAOA:`U/Q[P>i2eKjAOBhl_i@D8$' );
define( 'AUTH_SALT',        'v^qW=)q0Ki$] [oCx/2j207_/:nvuk$$[yX|*t5P]OE7Isf`F1]_tW$+l,?m{1_D' );
define( 'SECURE_AUTH_SALT', '6P, 19Ri+|TR7pp(h(<DX_. `H451Mg7|:4T7 hv]QlQ{f`7_VLWN/Tw/]XV ];7' );
define( 'LOGGED_IN_SALT',   '_ VwJH_EV7`Cz(w%Lw2aat$&5Jb+Uk*qcE]YAEbUWw/m2X agB~w/YehqD$ quu:' );
define( 'NONCE_SALT',       'F4B_.{ARtUyh1z8(.IEBj/.msm)1uJ9MaNh@P%,o/YavwD(x4sQs7dh ,:qaom]R' );

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
