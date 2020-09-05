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
define('AUTH_KEY',         't4+DAFow0H1XvEJWk4WhezlJD/u2xtoE7Kg2H18aFczfP9R7RD6l3thwKeXkP38w1OHvBT9ATDasxvVTe7VErw==');
define('SECURE_AUTH_KEY',  'CKor+f7BFoq6vfHQhIuiC9jXyTBDyw81ME1HxNd39KXTjXbo9MNzGzVh0f/I55k3IBq+xwh3OA/P80LqaiPiqg==');
define('LOGGED_IN_KEY',    'sOxvGHaqHjg2k6jlZLHkLwh4IZd2WECmllfgXmFH/MSriVVThHIzkHDze4Gp5avu/qhhrsyx6ehQ3u9EEIskpA==');
define('NONCE_KEY',        'I653ASWQ6FXSgKSF8mhqetwVnSDcRaEMNads5APTgnsDZX0+3bMoGWCWfsahjuYEiiiAEYxuTa9Jk3r+fUiHrw==');
define('AUTH_SALT',        'GYFjCPG5rRbqW7VXCDCgC4WUDBHuEI63GHuR5p6NRnh2im8gIp2dJny+fzNm0ao/TCi+zSPcVb83gQhnzhTBWA==');
define('SECURE_AUTH_SALT', 'IRi8SZFWQ9IJhQZb8qfgxjGOYTv2aAtWJ0uDxkExrKeMikesVn9Zzh6QxbcoBiVV7y2u/TutPvl9nEww8DU83A==');
define('LOGGED_IN_SALT',   'xsRt+NrTQH0XPw6ByYp1kGHSQbBgeUglE2emmIW5JfgwFTqXB/x2bZlLOKfP0WsjYP8eYaigauQs09yYcGczAw==');
define('NONCE_SALT',       'L0YiHPtQ5g/RSqb0QHp+gC09oShgedBu7J4t98lZMdxZgIinRu3qw0S7yLDxEQlGGGuX7XrzUWrVR6dZeyh8IQ==');

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
