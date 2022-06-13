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
define( 'DB_NAME', 'stepup_wp' );

/** MySQL database username */
define( 'DB_USER', 'stepup_atlas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hDm7BDkZxA=l' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Av82RpDd6Hzp3jTl91WAc8ctQ7KR9wlCnQbpo7oLpqeFvLgjnC6kJju9xdQSX8ma' );
define( 'SECURE_AUTH_KEY',  'PC62dap6IjJYjRmvOW3al1lO4h66lSaVysI763ONUwSlqYD0YE0RbtwEng99zZgb' );
define( 'LOGGED_IN_KEY',    'xCeOMWRorLdovHS5OYJs13uBq8atRLDUION341WLlyGjga6XCfbk8tR93XSWuzAx' );
define( 'NONCE_KEY',        'fakS7ohqSehTlxRBf29Am2sN9lenS0s66HntF2fCS20zrQBBg1XZf5dXyus4ohhZ' );
define( 'AUTH_SALT',        'ZZPK5OzWEl0VjABNIsnfaWbrFk6lQgBNFxFU2UzIjpt7HNWxQsEV6qeNtCPE1zZY' );
define( 'SECURE_AUTH_SALT', 'XDI7PKLVO3M8FaZmkKvv1X25ngpmYMpz8MmX0ofEMiqES8pjZQRbkj487LyNqWpl' );
define( 'LOGGED_IN_SALT',   '951XodRnkl0upi1h7SulR7ZHf0bqhITqtpuD4rgrgG3bYN2UHaCLWKIVrXAsEmw8' );
define( 'NONCE_SALT',       'xkFjJcQjeeh2yWEz3RmLKm6ki1rxL53mIr4UI5E6LziIZOLmYsVGWIbcv0YFGQmh' );

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
