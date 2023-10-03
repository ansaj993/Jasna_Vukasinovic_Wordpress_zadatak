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
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Awo84S5PNjQIJR6c9/TsJYzqRfXjcmJm7dWy2MgEBlTezxpHgOXqUXDYusXlcwP3HPMXjZXDntNWkfC71gOk1A==');
define('SECURE_AUTH_KEY',  'O0Vxt8vz7UJpf8j9h5Tm1kKf+5lCg+uNa9D5IIhcbd0GPY8jpNHR/Lwp3HJ/XQ6dVNHM2sngEs8iEmFOZg45hg==');
define('LOGGED_IN_KEY',    'XDxVbpbMNAKZ6cKQDtq9707Rse6qKzJELNAqWFTIBmIUl7sT+TduB/zSWgYaUQxTjNAHM4o9XbtNPZ2ghkZQwA==');
define('NONCE_KEY',        'Zfl0hCDslRY5Ky9OSFAn8XI23h9pmVfa2LeDg0ntcX5emmtIZgSA38VHJYd7KpnMcXiDlkwhP/JadRV9Mx6fCA==');
define('AUTH_SALT',        'nxuF2VKE/G5iQoU+R+oUGmUbj642bXfYIYLHzceo/JUapoJp4aqJ3vxVOsDPJnGT9cymZWOb/4VZjUSQaFeuaw==');
define('SECURE_AUTH_SALT', '6zffq0wEDTqd0mLQF0Sx1SJu566Qveo0HLbfwxHqqSGHpTEd4qFDopEHyIr2lDSjEa62+fxt6dJbqHn6wQSlSw==');
define('LOGGED_IN_SALT',   'e/0TFqCCHCnQSu7kDxJO3no/642x9XAsEzdYdQAsLqcAOLr4P3rtdj1u0uIMOlqVjyUyVCY90EKdzdMUcXVduw==');
define('NONCE_SALT',       '2MRsOsGJXu4Fi54ammACJY7mr+8zmi4euCCzY8kWKff9DRbFbC9HVmqQd8pq6RAx2rJd2wXuPt5ZH7j4HFG9tQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
