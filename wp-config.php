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

define('FORCE_SSL_ADMIN', true);

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'j@J,Bw Z_2.bO`bn&!);J0i88^kO+]u$TW#`AgB{=,%Ti14T_c;A2nCb!NW*$c3J' );
define( 'SECURE_AUTH_KEY',  '&B~*@:[0o,%g0.aCD(0Ajru2Ena0@?Ef_]60T8(+^@]VGNon*-ZZK&Wt!Ltr((Mq' );
define( 'LOGGED_IN_KEY',    'I{8KH1Wh)UFHmBYB@J<3oC>LdL$8rqK6NhYad0Qh01WN,}KVZg~Xf`,x^@Kgb2<D' );
define( 'NONCE_KEY',        ' z=e9#.gB33YrlygJATQHT@~1GuV*CZ(C AbGM3JzvJaiUi/F~uT:_?S^8}%{m.u' );
define( 'AUTH_SALT',        'x-18me,;J=Bm9L^Px`65av~.ac4P`:iP[J7Kr0,aOm&%bxs:YItk}0NS3E_NZ4!p' );
define( 'SECURE_AUTH_SALT', '*Jks|gYt94n>p?#=+SNIgip:nIV:HkApqp!I[Y%_>_}!3#|Ra*yt7ug(5!#V/7ga' );
define( 'LOGGED_IN_SALT',   '^&uT^y$b4GZD7/)Uo5,SdN^m*U;uVf%#M^Zq8r_*_hed~lIC(ZdY|n8.GnQ4MN=<' );
define( 'NONCE_SALT',       'g`8^NC.vtn.!s]SE.D{d(`n%i:mVdz^Gx>Llxz&&O[5]g<T{|g)h#}>k)gOA;t<%' );

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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
