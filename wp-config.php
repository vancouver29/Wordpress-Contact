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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e|]@H/;rb)!Q?N*PqqH-2z_C/9gwhrXz}G`$H.IWQLM|Z+gZfWeFq1m_z Au/l{N');
define('SECURE_AUTH_KEY',  '(c[h>L5.QyUc)AN)$^Y[kM[,07C(tk;KPQ7MkIu7=&:.kk>:U|D{z?ti;+^yMn(D');
define('LOGGED_IN_KEY',    'D%MA)_Vt%]-yXhJcB-^o@$fdaeW }W)m@cK#>&O(K2@LQnr_fV@&f5,N^-KVe[=e');
define('NONCE_KEY',        '05-F!6-ZQy3McsM0v2]Ncs`]a<ucrA~lfn7y)|7<)^>=&tiDHtlJ<|cHp}c$!^qF');
define('AUTH_SALT',        'X3nB)v|c;e/$qCgR5soV|y|~=v$`lPm|ye7hRd*W+Rdmcz*BDx[B|<|%#-f-X4$n');
define('SECURE_AUTH_SALT', '!ndtU>|gmU=._T+w~r>NF&}R_#^FhUWxjt+g2gp;!YZ%gb/]S|m},9@fPY2X+XQ[');
define('LOGGED_IN_SALT',   '<Sd)z[8^e8I9QV!Dbd%*9wD4p>]aU0.1xdyfw:R0T10ttz5t8Yb|~ZAS]-IO%wy.');
define('NONCE_SALT',       'DDxbGIX0>$/^B|N8B?mBk[|}TGxO%|R88u0/+5hc|vxF``dhp,|oQ9a2Iq-X/A29');

/**#@-*/

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
