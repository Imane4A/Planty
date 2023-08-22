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
define('AUTH_KEY',         'Vr8CMWbh3RRiyNooQjerbjY3D+vol8gxXO2KcRJrhzOv/SNnKM5FCZTVTRdroe1vEezOHDheI37OMAJeGWp3IA==');
define('SECURE_AUTH_KEY',  '4HIcxLfZVAG4EzFKpl4TOC1BCci7gia1zuoFAhXDq9heciDJGHqO/dJ1ZjJiYxn+k5Z+pf8fM1FR17YRWITl1Q==');
define('LOGGED_IN_KEY',    '7j+1/cNBLJa2bJ+Q1d5SQw9/uu+hGgsJS4NleA1Ci+/HENO1WSTxUumENjZZRMMrjoY1ZSJr/v8bIL7z1pdDuA==');
define('NONCE_KEY',        'K3FjoWZk8cZ59r07BtRLP+AbCqHrWorWj1VwxmtBwjYy1EATeqLCvsZQgb3blC4qDlxNh/DYZcPdHz34N1jrGQ==');
define('AUTH_SALT',        'fXuoFQeCefWFVSVFpOYGT6+iuXIkUBuH+i5YJyQ+KgDQkTgu3/A5eREbgnQO61ggPA2BTXTMpa+ckAHoCXZtKw==');
define('SECURE_AUTH_SALT', 'wNdpncWJJsUEORQs+mAW5v3WC3oBNIUEJrzTpabRjMGDJWnI31s36o65FGVC90iRvhQt7R7Gie8tkrVTXBw61g==');
define('LOGGED_IN_SALT',   'sVRRsoT/fcmSCy/3FpwuOwJ6Ne1AK0h4sV2uBRSCKonOAKjktYEPKTLVPi+P94tWQdCN2eHnZTybN2vw29yUJg==');
define('NONCE_SALT',       'IFnl4tXSDADUhm+QUsEHB2CDDy+OllzMFMYs6lscXwe3KDeMuBllK3phFn79AFWaamK9oDA7vjIV2VVkStDLvA==');


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
