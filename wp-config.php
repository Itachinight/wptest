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
define('DB_NAME', 'wordpressItachiSql');

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
define('AUTH_KEY',         'Edh<48voux*&|zvT%!Z-jeg4utdC-iD18~c}J(H#R#rKu}<rAKG+^v7zn]h>==y3');
define('SECURE_AUTH_KEY',  'Fh6e$?EVmv;!IPPHf4jf)F|=+6;*x;qJU{C?h2x it2}C,+=M}FS38md_3h%JF,l');
define('LOGGED_IN_KEY',    'XQqB?zGHwfE`ZSr`E>9u:w?`{$ibrWeRHuFqE7p@}&U@D&GtQ43bIzOO`fEn 3Xr');
define('NONCE_KEY',        'Tf`4pft`.t^8LM854m0{sbi1ktnsw}%*?)?BU-){U4IgS{0w:_s_6e:,i 6,!_]Y');
define('AUTH_SALT',        'F%?f9*75b#W8W[GI4n,612[OTd >Fmf~R:l]g%T1 Y[:HXkm?%PQOoc]*)!~:+J*');
define('SECURE_AUTH_SALT', '*n:g/QaQ;.y1myw<wpbu&PqkJs$nF1TpdG:ma!`vtq~g?B<Oe*Gt#@xNm-1)2yPZ');
define('LOGGED_IN_SALT',   ',16 #Y4 q4J,}6TCv[Vl*@,aFno.vnf.-2E@^:)lt0s)kB8iDf6TR5O?Ax|> *Jc');
define('NONCE_SALT',       'u!9%^a;O(I`j,lmLA!HDNS}H[b;t]0p3>wRY~B/c#u^88_j?g{>POK*#4HD6ZE;}');

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
