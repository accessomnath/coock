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
define('DB_NAME', 'e50508');

/** MySQL database username */
define('DB_USER', 'wpsql');

/** MySQL database password */
define('DB_PASSWORD', 'Mysql@2016');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FhWTi1twturSZDJLPU8uxHdnheGN4FFhpB5h9V4p7phroDUtom7CnnYfAB6p9CRI');
define('SECURE_AUTH_KEY',  'M2LyeAV56blruaxAhjJSInxrYMrZ6istDY8425bJq3Nmy60OjZ138IOfJExl7A3P');
define('LOGGED_IN_KEY',    'rNQd4lYTiMgwngHimDHz8S0ko6DZa4V1Va2wSS9MHOESmAKcfMCfeAKxAGPYWKZW');
define('NONCE_KEY',        'Gxx2NwsuZAO6nQDxoqly5fqd1IiFi5t0HFEELolbbhRqu8VI7BxaHU2Ee75mf2qX');
define('AUTH_SALT',        'iwvPfSvjKwVvARqWlB9g16WLbiuQa02WCa281i2qjtmyqApNiLR4T8q36VlEr0Q5');
define('SECURE_AUTH_SALT', 'al0OcCXB1awCMFz0NFnzSBcojqKf4vu0u4zpxziia9hDovtuIIOpiRfd9e38dyDu');
define('LOGGED_IN_SALT',   'bbdzezgBripHL9BNnm5asXOHfEDKxkhiGEtan2kqTHUDnNYg2m8PFfQKcDZxvhbG');
define('NONCE_SALT',       'Z55Lpmyje2c5dHGu1oQMSBhRSIpxCc35vHN8NX6TrDPfjpLJWRMnlVRAIewq3Cvd');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


//define('WP_HOME','http://localhost/50508');
//define('WP_SITEURL','http://localhost/50508');