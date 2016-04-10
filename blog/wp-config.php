<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sageten_wp1');

/** MySQL database username */
define('DB_USER', 'sageten_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Y*3N@KLlIu28]^3');

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
define('AUTH_KEY',         'PQau3DoZnFzQhEp6lqYTGWWTVcPBQXIKOpc3IDNjJurOhhirxe48A1ZJKGA9g0dR');
define('SECURE_AUTH_KEY',  '8308R08YPE5yC8uutRbtsra5IsqRt0cPkmz42ppXj2AwhunBZ5GSQzckSw8UoOlv');
define('LOGGED_IN_KEY',    'fZBIzMcYpPYvVxw06EH14Hnc168P2Y0lTM2lZFQ2MRDsTGpQpPjW2kgAIwBTPa3R');
define('NONCE_KEY',        'HYHHmkcyks8PvxQSYid68I7pZBtP6oKcSfygj4ZtWYrMdA1R7DzfkLVkPYAnFGH1');
define('AUTH_SALT',        'TZdsdkHOwDumE8ZlUmRXJSKclyn3IYVik0yLBCxCDA70RYaGRY7mos1UBMvigyyt');
define('SECURE_AUTH_SALT', 'lyYR6prewI3ywIjstIB65knvnI6UqaWaw6zHqsfIt3Vvxm7VugZ0rJYsyAYvNbrO');
define('LOGGED_IN_SALT',   'Ws8gxrdqkVIqWpOl3xUsb3mWeobLW47YYvp5tUqGmYlfkANfUCuwwVAsH1H4Yhsj');
define('NONCE_SALT',       '0pmhcw4yKHcxc54aY5Te5jCowE42AgzOMAIHhBZ7MGPaJ7VFfMhIHpf6Rll6XpZ2');

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
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
