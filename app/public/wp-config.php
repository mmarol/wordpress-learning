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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IX1LwrF/XyOf5bRBj1CKrh5VgEk7HngalGM/oEsbzW1n8qt994YFLqv0c4N0XKoZNqjkkOjim9Zbyh6x2xlzww==');
define('SECURE_AUTH_KEY',  '/+5+0pacwmJWNWuBmuuVLFf8TTE9ZFShUz9XWSgPHaP+jxPcK80nISrMSM+Ltu6KkxKoo5aozDdJZ3qmoX/L7A==');
define('LOGGED_IN_KEY',    'zrZT/uBNn1CnqdJLsjBKmm1conucE3xMb45x/lagyPLPDKbAD1ToyQm0aOiDFOB86f21rgIDHkxeOEW6g084tg==');
define('NONCE_KEY',        'HEHlm7qPU8Scm69W+PHD8uOf3sn++nnOnPW8g0ukBXJPnxX5BvlqZxbspNCg8vsJOezHscSD6lnpvzMvyvbXnA==');
define('AUTH_SALT',        'xnHSxjPAVkMBZRBCB666U1nl6ZkQyh+sRqL/97D24g+8L0lEddIHx+qcRanNSllfaJjT0aR8Hns33hB5So6WgQ==');
define('SECURE_AUTH_SALT', 'TmEXYgn9GMVH2XSQPgZyz3V28wkQDRT0qaSLaEo1zrR68kYd/erfOgLUu53a2rtyVJbguzNLLUtuwoSgVTW8Eg==');
define('LOGGED_IN_SALT',   'g2Cmbt49jV7LZnkfJzqy+weF9eTWpk8HiA8MtMv//J3AIap+XcqkQEmEyzNTR6xjuMlI0nvpl26eJ8In7bcyKQ==');
define('NONCE_SALT',       'Ib/CuOvbp/jfT+ZSnjlPj770i3jb/XvXRGWiYXKfGB6xLoIYEAbZ/oJNIwg85apK5VvVPk89m6IESYNZvwpeGg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
