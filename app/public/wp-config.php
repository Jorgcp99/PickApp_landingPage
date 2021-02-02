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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sSw+BNss2RBTBAbZPZspjRNHQ+mz/YS/Yg8Wd8Y3yJS71gElL1meE9jOkprp6BZ0XnDjmDKw8o1pZxvK4FwLJw==');
define('SECURE_AUTH_KEY',  'b9ER3WUlo8KCh+E1qi0QnFvK0v64Fz76JhGWJK8pfexbW2T+nHNgMgCbmSjsikwuMWLxjZe1/rzEYfP0ngI+MA==');
define('LOGGED_IN_KEY',    'JyogAtPq+oKN41Kt+IpU0YrVqwhbZYYEFBxnfPiZqbsoG9S8NuYjikgnymC5G9WygL3H5M+OmDtXwaaZBzKcFQ==');
define('NONCE_KEY',        'VOD1atIKH5kcmBF9Gl+Rw2rHxDiFOcG8rlewBz5XAzGt/dyblZIEvAPwi+pt5Il0D2g9aQqZKsDFa59p+TuSeQ==');
define('AUTH_SALT',        '58rKM9df2KrKvtJXbk0UhBhUMzF4QYj5Y07aCmc7uwhy6N3xzst6cpzDCG7wREiQD1ybqN44h4Um3gyDD9KDBA==');
define('SECURE_AUTH_SALT', 'myBMB9ECW96Fk3M4TZ+0tTdATu5c2pvyYARAS1Ql05AhnffI32FNV3WlUxpYP4xT98WRFzHzR6+VUGYFNwQa4Q==');
define('LOGGED_IN_SALT',   'U7jAL24bp0hkQlv2XLjsALO+B6EtBruHB+xlUDGUhZr3ojmzwKcXefWcY20CvqmUjaBF9yQwe7cHVkzXnG+hRA==');
define('NONCE_SALT',       'CP6LB3LyBPrYM1Zh8yurRVKzHvCReo6a9GCofWHzjZ1l4SJfxWEl3Y7TLdnqb8d/YMghhQ/kG5VGsVbVmYezIw==');

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
