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
define('AUTH_KEY',         'n7kydvOYo1dct/6P/WNiZKX2fCPtGFwSO+z9UTGlfgMt8DqLSf5fyhuW3xpN6ZsOPMUm25L+AYwjOEchydd/Uw==');
define('SECURE_AUTH_KEY',  'tJ5bCkD61mlXRVd2VRoyGRg0lmd6o8fTSvgAXUC4O1V5R59ogvOZ7lYOO4eNpCEPjnRwQqqJKyFolQv2R9+qDQ==');
define('LOGGED_IN_KEY',    'K/NHVS2TofZvzvNXt5N4vRMcowbnVUOqbjKqkOG5R1VoEdsoqJs1cXgAc4KAaWJ7GeyiyQ59NMUbFbsujEJ64A==');
define('NONCE_KEY',        'hUiND3MoJTWCm7ZXmrVY8R/PP1xs1iO0b8T/SCk2nTkBWIDsZnH9D/mcPi0KVqvkQT58h4uHsFAe74oZcLpwKQ==');
define('AUTH_SALT',        'YTx9OWzPoIOBDH40mmQXk+Ny/VepUKrymSeCWrBmwY97McDErzB4jx/fvWs3xtyqNaqL4m+/1ByOb6YsXwDwDQ==');
define('SECURE_AUTH_SALT', 'J6E0+vsCk61shYwqY/LiVgyXkZUDvudwAoVYx1uzYcgnk+nK/JdKOj1hwIqdw8i8lBpHwtBTIett4DPTYbEfVg==');
define('LOGGED_IN_SALT',   '1f2aI3Bi+wcoCvbH3wMXwz7hG1SWy0oTMfI6TPj3+5+kOO6DHwfP6LbtZxVdE/tAPVrCx1znmfYV530EV8eZ2Q==');
define('NONCE_SALT',       '4ng5VGjCko6fgNkXaR96VvGA3xQ9qeZkqvySdbNAVXHDolNaFoy+9+FmjH6tkgrZMmNpPY6uW8geZYt13fawNA==');


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
