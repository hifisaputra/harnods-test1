<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'harnods-test1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'whlK8qXhotK96D2PeDdFaC6k4g9F8ThMyl8YITgcZeGgHEQuHCi5xBPYyFygYpel' );
define( 'SECURE_AUTH_KEY',  'MA3Kv1E6R7bXYdoRAD9z5mzeCTp1mbwUA6JJ14nGM525XKmGinmpGa1PN59ErOAN' );
define( 'LOGGED_IN_KEY',    'djPVwLqqXFqhP6HGe5FRanLSQZniPdpaTd352Nu3wCN1oX6Kw4yp9jgtFdCv4qTU' );
define( 'NONCE_KEY',        'J0oZz8TsqwRJAp1MliB5SahQ5ZVdG0hGNLfUblNLbrXPkexeCej0dASuaovE6lCb' );
define( 'AUTH_SALT',        'gPh827eHX4HM7WxvUW6DIQoGs8gHZiPV8OEhJRiCQDDcFgROEhImddbSVZ2ANZI5' );
define( 'SECURE_AUTH_SALT', 'k0VH2ORf8JM3mcvOzvGkKlms2XQzwn4HGE4WEnfnDkPArL7hCVTQTBdBHNTe94KK' );
define( 'LOGGED_IN_SALT',   'pVC3gNw5yqidYr10N5zb6SuPfprUxXWh3WV6VQ3hlAmFROkUApj0ood1CKWBwZqk' );
define( 'NONCE_SALT',       'H4D732476H9CCeCOBt3s9uyAYbuPesR8uaJmCXlS0Mc4yFId912Xsk6d8z9MF8ao' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
