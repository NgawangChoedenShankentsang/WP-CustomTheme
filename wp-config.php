<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^F,bnZWkoJdLBNDBXEqTsdxO1o_i~A!0w]OcdMGIKPI6_#v: (k|y@sUeb<%^a/w' );
define( 'SECURE_AUTH_KEY',   'rBWo}M|$_|[q/w&Ny,,[$9Qk-HU1ii}As%=14&de~k$%sZTXV;N(5~Nm6{pNE~<Z' );
define( 'LOGGED_IN_KEY',     'i(*W7E{-)]^Q+d[bw9GN)]r/9PS@Ym,*z&wBNZdhs.W7dXt|^}d 8,:`LvF#S;1u' );
define( 'NONCE_KEY',         '?d3ET98^wis%S*w!PcnC*x^y]ek|0y8+durNu<sYsQp,*V)Wnh{-P^u;Av<[_G2M' );
define( 'AUTH_SALT',         'X_!K#;8LPQ,y/;Ku]YTcFKS^&Yf4NN1p<!&$^fe61wHyje![%tGixA5INsRjL,|B' );
define( 'SECURE_AUTH_SALT',  '=N7j)I#&<v<p:x)zL+[+?b@&.P;y0.YHhKEH`_?O&G pC&N@0h;x<ZFaV<w$B*eT' );
define( 'LOGGED_IN_SALT',    'k`Xv>Au(HJn3,_t#W7Uc9BeJzAaujyE~r21(3V@}Q?qny|<-0H_El{O)xKamAwtJ' );
define( 'NONCE_SALT',        'E89(qg1T5fJ|}*CTP-yn}>gnh pGEzhToh%Z|?.P(u%l.(DQ}<c-r-O;e<G~>2 )' );
define( 'WP_CACHE_KEY_SALT', '=uD+bL`jj6 :O-</)VZw[Hg-kH&%V )]fRy<AX7eC?Vc*dSi+4+@RjE@YWe1/In$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
