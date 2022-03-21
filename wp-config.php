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
define( 'DB_NAME', 'basededonnee' );

/** MySQL database username */
define( 'DB_USER', 'nouveaucompteuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'y@.X3knFxltP[MmCh1r4Rh%T2}2g[U^McO5+?{0&PZeb[KscTMC>S]>WAD%T4.|(' );
define( 'SECURE_AUTH_KEY',  '*^*9)_Wsusw*_Z(Znc$CscV<4nt-Js5gkpvIWb477-?U;{)qQNEce=dF$b4}_F[(' );
define( 'LOGGED_IN_KEY',    'ncEc4Vhv#)>4l8>jc1-snNt~X^%O}Y#zEk8Ck(Y8C*3)/2<P`QiqjFsz2K)u$HUe' );
define( 'NONCE_KEY',        '>:K><sZOFL/OeM6)a+yt5W7IdsU< Ba720x|%Y~KY?#!0#:?MC_0xV29n`}M:oha' );
define( 'AUTH_SALT',        '[r^G#}0rQTQ!pD:$L% Q 0V|O^zu`uz}[h:sYoEaA,9A56Ej##(@{f)Bvfooi<5M' );
define( 'SECURE_AUTH_SALT', '#AsQaY:&{6FmMQn#SRJ>*m K1nW!dbh#m0ni9v)rxa:Q?8; |%P+scNeHT6Bc`F[' );
define( 'LOGGED_IN_SALT',   '`Ylvpa{}xOot8^#Kt7.vkKe]][T5j,Yo&-]/=r;u2*ekinAt:F0~S]DH~^N,_#mh' );
define( 'NONCE_SALT',       'w SthAPjq2>sB0MbggT>Q29?m *G!bn8--$TI/>yWb &e7)A_8Lz1So7~)~w5[ F' );

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
