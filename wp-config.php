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
define('AUTH_KEY',         'xfrd1b2vTkWA+P3wB1rFNBIf/jRz3Q+vZg/Vq3KMcWBg/XXJ7az+3UpUvZiiU7GmXkCeYAnb8u9jeow3oWM9pA==');
define('SECURE_AUTH_KEY',  'z9wSAhNLFhVtHj++dpDbgWvvX8RkzciqBPeEWGJKQ850gqjfQQISIRy7kDdlN7/q1TUM5LWbNipFN5rN4AMdLA==');
define('LOGGED_IN_KEY',    'G0JAeb4/rOP42hoMmbatwbF16ankw/Ta4LffTU8gsQy+lqqFzrNTnkGuyeNTIttB0eCRBWtERSP8Pt99ub/qdg==');
define('NONCE_KEY',        'dPW8DyB33yRDnION4pfvMYpWhLi4xdbxRFdUtJS/Nw3Hou+9kT0AbNM1eywFgmeKkOpZF0yuMjFY+mkTn1Cr1Q==');
define('AUTH_SALT',        'VTrVgMCP/sFgu1EqsUDhTq+kXKQa/da6flVj+paY2VSXz7GcC/uU3UUij9NXv2Kq/Hwtwp9046p7HZXZq+Bh6g==');
define('SECURE_AUTH_SALT', 'b2CVWNu1ljZae5MO9TAM9X76DPYXBgSUxQIyUppeXxHDOgvgzZf65DbxbsapCwfIMyu/lcR2iVXtrhbBtbl/6A==');
define('LOGGED_IN_SALT',   'GmZ/BL8xGjM8e/ThliN7TmGH3NrfMWLMf3Y9p20J9JkF7dCM3Sh+xKMjeLpwCu7NIoM6nLD/XrSAgqOYo74tQw==');
define('NONCE_SALT',       'qpMnoNFlq4Qvx/hwgmXXHU4bhVZMYVEmI0v1Yq1O+aY8O+cTDbD/VZso2HXKheK+QFSEkxLlMnjFZ9L4GkjA/w==');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
