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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f7a62+qmKJMF1rPGy92WU1WSyCRRc5R2qoWAHBwd5jyq6RgWTvnI6Y0wyrYHJTcwdgtGf252oJJOQT1lrgKYTA==');
define('SECURE_AUTH_KEY',  '8KSlbFqmbCb0mm0QYwGWzxw57ZQmg3XzwhD6BypRahvI2ulyOGO/2CuaaqEgBidFIMs3iqDB0oGUyvwcHOpMZQ==');
define('LOGGED_IN_KEY',    '4bYA9l1vksBzqHsqlfyopfCNvoemgofUpXGVLKBqvBEk7Gi5moaTX40FBm1nq4pzilQDWx32z/isoIqOo95Zew==');
define('NONCE_KEY',        'a/H9VCKEx/GrH3egZbnkVn82iYtCayyQuzG29gRzXJhXzzWVJ4eB7qh1e5+ZCZQ6F+njrQvlmps/izDDtJeB7g==');
define('AUTH_SALT',        'pKFhs7Gc4gWKF1ffqhjJk+mwosrGO9QakycfcIyZlqESolg4eDyHsmkDN23S3a+xGLpm03lq6BrRRLldbAucgQ==');
define('SECURE_AUTH_SALT', 'qUkW6un8Vm/0775qUJr199Ptk9oVZNbNc9yJVRbE7taC4R5H+cyvXRXYSt037Z7QHzSLvgu10OxHz+N51WCZYQ==');
define('LOGGED_IN_SALT',   'yzioIktB2iZVe0DpfuOKifWoUzHd5T0OjXxERrzBlfu57Vp7xZaBYL7lKlvfZy33wo+OgztChJ/0FrGONS1M7Q==');
define('NONCE_SALT',       'MgMKWgHw1tNXW9V1pW/T0O0YMRCvZKUMcU8tneaXT05mMZ/6Ng5Xq4eD1i1uf/09ddbXiTI7y5yw/xl8XqdkiA==');

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
