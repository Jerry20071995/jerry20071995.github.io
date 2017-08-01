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
define('DB_NAME', 'wp_project1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         't]QPv>Y@]W$dRHy:elR,Fp3BPtA?7q= mk#S3Q_^4)vzBHz%09K.W*~P>>&7AY>d');
define('SECURE_AUTH_KEY',  '3)zlKzTXyPs>C[ioM%F7O|^1&N6%YLcGnWQ}@c1fsTqi#@aHpY0!x6ew_n3o7qob');
define('LOGGED_IN_KEY',    '/buKjgG `S$,3mLm;mM4nu^!G5o;;nppHaV5)Mt3oJ~.(`)a!^>y@Xv1QHw<2F)*');
define('NONCE_KEY',        '.K34$DzP1t9DF!nZ|J+UpvLv(UUulbmj9$:*Ys2!|lE&%l88vNOS4Y]&-Ca,aR-T');
define('AUTH_SALT',        'fT%S9mT3:^YAUiVXl22P>BQB,~pDMYc>E5D10las&Y,4LS* .|&udP}TXAn4{~,`');
define('SECURE_AUTH_SALT', 'V%OylYhs#[oej[GgXWo95)^UyC-uF^)Q^P!AMR@Lzd)B-aIjE9blCiI%oOYDeW)`');
define('LOGGED_IN_SALT',   'jFn_o5:P5zlb#r{NxZ<u5seH9?5uwIRJ3s+gNxnQ[sQXu+s}:9ci2dJkp+Vs1[z;');
define('NONCE_SALT',       'r8W`4G[w_pBEURY/^Af5nrWVQTj6i|D*9 17s(0e1hla+PH>R%YQT;eHl3JNaDYI');

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
