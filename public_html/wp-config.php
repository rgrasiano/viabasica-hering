<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'viabasica11');

/** MySQL database username */
define('DB_USER', 'viabasica11');

/** MySQL database password */
define('DB_PASSWORD', 'Kenzogord0');

/** MySQL hostname */
define('DB_HOST', 'mysql02.viabasica1.hospedagemdesites.ws');

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
define('AUTH_KEY',         'cbysocodva8u9sgehlvyzxr2xchwa4pzaayntylh24jhcvdybzdoaw0cw3j45n2x');
define('SECURE_AUTH_KEY',  'ca8hdssj7ne2lzplie84h66f707jhhfqjf4jupdqdgf5w5a4ahq8bovo0cttz9aa');
define('LOGGED_IN_KEY',    '4ohmaqblwqwhnagdx7nxcm1z0h4inejwvetl1u2li2jz3q7mvhp9x4wvyfqqsi3h');
define('NONCE_KEY',        'r3gr94a5dqjnw6nggq2pcz4ioyfzxhjyadn2vb0pyd00ntl2whjwbfhsvqrqi5of');
define('AUTH_SALT',        'qzzynr88wtzlbdnyttgv7kbiumrr5aiotnckrzfwdrfh5ultspk2xttaiyinwvvu');
define('SECURE_AUTH_SALT', 'fyzoerg8gkirb905b7l4dl4p4pregfofqlaskzb8tzyjgblkfzhiknzty9cm56jn');
define('LOGGED_IN_SALT',   'crfteb8zukdddqdq7q7hrdlxzzfp7htxhjofkny6axpbvg2c2oz3ehjravrcjchw');
define('NONCE_SALT',       'q8uqljgknlez87dauxvwchiesbsolxmesvitpgclglzl2ropyjaycgn2ruace0rh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_';

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
