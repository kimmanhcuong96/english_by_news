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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'englishbynews' );

/** Database username */
define( 'DB_USER', 'englishbynews' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Y*4xtcxu(i9=A>F}moYa_Whc%^^*QyYv](6gi?`e(z&h,{ZJJS|+XxJNegV{b_~R' );
define( 'SECURE_AUTH_KEY',  'Yn?)$}KFU:~k:7>5T{Q!=`<!KLc< gplBK=:8uDJBs.6p3+ecwoxDLExQ6<IM&r(' );
define( 'LOGGED_IN_KEY',    '$ hCZ&iap|dLM9g vvpARoS)6ax83F`;+W~r>+h8jK#/)DMgB=]*U#mw+;>+}dWk' );
define( 'NONCE_KEY',        ':=2>W@Bp*PRbW)S$_!e!3DeKCmZKB+s, `t;K$%A>P:UMt!5+X[>)50e2C?S$[]|' );
define( 'AUTH_SALT',        'hKi-^x,3`m5`X{z?|z3#zrZuj1X93(td,$RI(t!Ff_.es=dzDJ(Fpl?Fdg-s3eIy' );
define( 'SECURE_AUTH_SALT', 'WxCyM7)hHh%kz<S2h}`wNg:?;@t+pA.+RwF17M&+gXVC9A-zi.!_8N`*2.o&Gh_l' );
define( 'LOGGED_IN_SALT',   'cemsrTwn<g`y[#GHV0a3ZG@38TpV?wgP9v(H{*.M;b3vhT8z(H.JQnY%6eqi@zTB' );
define( 'NONCE_SALT',       'O488N$#54i6Eedzd&h]Rk-Z8;~]JjXCu.3QQ[l@afXB)41)wcVZZ#WWV9%uxEo_r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'enbn_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
