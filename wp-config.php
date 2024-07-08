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
define( 'DB_NAME', 'wordpress5' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ',g2_/n0]#a@v#G|Atb_!dbiVHopwf(fP-yd4edEYdHX:epfayzb!W52O$me^~[0S' );
define( 'SECURE_AUTH_KEY',  'RH29Fdh9G$H-J8YQn*d|=Tc9RX*nkmW`q{`je[5T2-CD>GXeI3>J=X8[Ja!bM+bI' );
define( 'LOGGED_IN_KEY',    '|OIR4-a=icPY?p/O*;m>6&c*u[ejz#?KPS8fwGNN1KN>?joW=k?NK_=|S*`J71xa' );
define( 'NONCE_KEY',        '^E?[e_:-,eK+R1 QgRLn<De(w*[4$E(S%V1f6)c(t 82sq:o~82LwkF}UWMGqcof' );
define( 'AUTH_SALT',        'Nre*IX(UM,erf*e%c~0k[kok%1FzVvUj/&_Q4OS_#$U8 e<iL@9q$z_tWn(4c%.c' );
define( 'SECURE_AUTH_SALT', 'o6q3n~T+KI;!j9L1aLZ}2thU;I>((I(h5yZzsZ1t<2[Du#|=(&mc$y`$|}U|~GdD' );
define( 'LOGGED_IN_SALT',   'T0TB.hqd3-cZX+P*(?D[BYp+7pojm$5<-qyqt}GBCMLx`)yu|IFL`F]$J)|i@3uB' );
define( 'NONCE_SALT',       'y6JT^?E<MNe`%/Z)w>ShY%:h%BAxnHr=0*gSq Ulbn:S+lK49@/;fJ+k|d[ ~!<@' );

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
