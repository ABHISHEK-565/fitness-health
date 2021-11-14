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
define( 'DB_NAME', 'fitness' );

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
define( 'AUTH_KEY',         'nsT2_nXL96U5X*xomHK=B@oVAfQL#tK Nm#rqEPj@%GT>w`+1*Qw|b,B)q!C ]ym' );
define( 'SECURE_AUTH_KEY',  '*ou}Y6N_fU+LL-U5UvDd1+7q7G.@Evsl|D%Y,?%N.j6K1NYO?7GZ-e=B=E_R2/yj' );
define( 'LOGGED_IN_KEY',    'M%J;j}=6?H.5dwcD*dRKL.TJl|urg6+p<&@=(=0l-,1+a5S[,Y}4G,nGO>!*GcAg' );
define( 'NONCE_KEY',        ';ziV}fYpv2jRh(%`lb]$F]&9!r)i|qGa#>8k2bH5?0^oY`IfoU{ uoSN(|H9cGY-' );
define( 'AUTH_SALT',        'wPkH8%HkK%&/t+W1PlP}g=`M+7RpLESoVwVV4ui+&Yl9.N5^;,&c}N5O]@ad$$0f' );
define( 'SECURE_AUTH_SALT', 'fL4_1w[h|xU$%suTnJS$}S0K3eR%H>.#+?^Kta@G7m6_m28V.Wpx=)$/,L{dP+$o' );
define( 'LOGGED_IN_SALT',   '=p1,PrmA>:KnxLWwMvc<(@U#6a]?N%`8&8![.gEkM UarPLHwgUO&`+oyUg L8z2' );
define( 'NONCE_SALT',       'D&MnYk+70imbo$lH-nV,6M1g (bGF5CQa6bkR+ n+QfXxfn8PrOwLTlN`Bkc!Vd ' );

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
