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
define('AUTH_KEY',         'CcWXIGz2E11mLT53FkGZPwELvvPGCxRqdFq28X1ecxe9C/hOJ+aAsf1/p5wOofHCieuuu6O3R1e5UpTSdELihQ==');
define('SECURE_AUTH_KEY',  'njWFbJNIo6YpzhmKSH7UDE4ISGOnXGsHa/cQX3hvQ1b/TLJS9ONP2csKP/HVFdM5s+EE5tsymOgevFJ3WI667w==');
define('LOGGED_IN_KEY',    'OSkPL90MUxbeWw3EiX7NGFT9Dl+O5ltZ8vceyS9VYkQbsjHPprJ0aMnHrqdY5AFcfccbHBLbBDs0VwtU3mRupA==');
define('NONCE_KEY',        'HKS1n/r3CZtqt9XNVmDRwQRjyu3dM6nBdZGnMF/XOAG/bHVidCw19B8iXQz4UJkG1grJNlEhsyemkNXahL/AjA==');
define('AUTH_SALT',        'tJjGioipe0thwr2Wa8LLTWNz7907GeuGWFw+y2HYupZjTyAXTqiVQN/uPIJTftLOZrRzfwz1b+UuQ982Bgrxmw==');
define('SECURE_AUTH_SALT', 'JfcWO0S2vf2ejCjuA0DxYM7TsWIIPyQvdXf76LElGgAMH6KbJWNxDvsJJUy4cqtCoBDoBs+xg5M0rCBKTPEvqg==');
define('LOGGED_IN_SALT',   'kpv1s0/T6cCymJBOPebro7df3DQR31H+0NrN+mv1mNbQoM+e7iQDy9HJQF/nK0gewcURLWRRunEpp5uV4shHtg==');
define('NONCE_SALT',       'fKNDEoWwhC7Ll8gL1QUz7oEimFiq/fvbBYarHOobdDcDqll/yAxrxotDE4njIDC0IeRKvd0aiWNVrtUgzxH/6w==');

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
