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
define( 'DB_NAME', 'dexxys' );

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
define( 'AUTH_KEY',         '-2`PmfT@2O#._7W +k0VA)lET5aHu[|/Ij[?ka<S)&S:<Rt*E |rPkno$_x:@/%l' );
define( 'SECURE_AUTH_KEY',  'G#(.wJ0!0u.wg0T-Q!;>lRr<65N-e++i4a[3dz!J 1!4-cC<}hW(Mcueg**~b@o+' );
define( 'LOGGED_IN_KEY',    'QF8RV5s?Ew[cbJ,(1(4xNZ~XsUfAmpUnz@E.WCu72R.o4%,en<]v,i!Y4V {hx~3' );
define( 'NONCE_KEY',        'k5V(l3XE+TRD]q)-+xtl}Lm0_yGQI0$<%a^%9~hiDvnz;Md<2d3w8[trdH[M{:FM' );
define( 'AUTH_SALT',        'E [n:7g9iC&2H0X,5?;ESa8^%Iw5Oy]+=dfT9dCWpz#RwEvVr*8NO^`&#2p/;,I[' );
define( 'SECURE_AUTH_SALT', 'c0#%a<8;@S6]Dx-%E1}WMPnVL[qG`P=XrtHaz.I.*Nh]whBT*id[3hr:[ol)+_?A' );
define( 'LOGGED_IN_SALT',   '7w 11LHqt`80MqD8rq)GwOo3uLPc1E}#V:SU.7JYwAK|?tz?[ppbiA,#.rcLLpPm' );
define( 'NONCE_SALT',       '#2q9yAxI8FQ`esPv=XhL3>0{yXWheFG d7r&gZDnN;7uh|k1L1j01LCzfNqaU2QM' );

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
