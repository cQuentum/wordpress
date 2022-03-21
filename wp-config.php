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
define( 'AUTH_KEY',         '1b1dee0a0b0b4555b201c4921e09a9a37c9c7267798a0f10fa49b5e2275482e3' );
define( 'SECURE_AUTH_KEY',  '887a3b8edbd683a8a2dddd42f1667280ab954de24f8f99495d780139f01b5b93' );
define( 'LOGGED_IN_KEY',    'cf6f1846839309b732e4843c7a1ec751a0db6c59559372222835c20735de5528' );
define( 'NONCE_KEY',        '672fc5bf4b4c2d83f0fd0cbd04b27ae9d27b3d508243999a036b9b14310ba2fb' );
define( 'AUTH_SALT',        'ef6ea358f33a23a61fa5b704e7bbd32f132cbd98c823c7c8645f6fb4982245de' );
define( 'SECURE_AUTH_SALT', 'a162c1ee813ba4ef4e9ce6b9e038f1cc0b2d262f3dbaf973f1f1aaae398c43fb' );
define( 'LOGGED_IN_SALT',   'a681d4b691a261707b390b412c713a9d594659626bd71b4cd1f3fdb48480a2ea' );
define( 'NONCE_SALT',       '15818b8dab54b6f841d637de1f174afc01a00c02acab3e25b806bec8dec3a0aa' );

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
