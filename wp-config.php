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
define( 'DB_NAME', 'glentot733' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'FSCu66}P.M(+G*!;JH*?gB=&}L0|-/yRH8nByAM)0ufXS]&+s>`<_(=ciPOZoj4A' );
define( 'SECURE_AUTH_KEY',  '#g`LmuaQzmb2#a4gfOK19F#et(y_JEnaW*=NJ^N?%>klE-(hp6~xzNmS/##OlU`B' );
define( 'LOGGED_IN_KEY',    'p$gC]cS@T&naLy$j9ZC>//JOu#;CaTvN4{Nzm&Rq6cIp/CBm$K+kcx)LcRz3n#3(' );
define( 'NONCE_KEY',        'SQSSzFS+xf}Ze=snVO^j?#OOlMu:g_$p_+Zx-;4G9C)UuD8@XAuo]A?kH WAU5;`' );
define( 'AUTH_SALT',        'pqbjhhs0170QCz=X9<[ihd/:.Eig~XVrRHhkA`w&!325 w{qXzMQADktaxSn;,FP' );
define( 'SECURE_AUTH_SALT', ')&w,6Nn9E)_W6ox_utkpEqVRZiIck/o+x;#5i</Znem1-wpJ1BsFQ(u?Ee>9MYc7' );
define( 'LOGGED_IN_SALT',   'z!HKZ{19H`+H+Ch!19vZ.Z`*T6evV*7)T[D#K./AasA^/5HlQ_kS:w&;%[r.!@;(' );
define( 'NONCE_SALT',       'Bs{337BGFsJU,i#lzS!hA|e(>Q!IzaV#)AaZLp5tkQol`^&JW(UuspGN3FH}@HGL' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
