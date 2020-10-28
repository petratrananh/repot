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
define( 'DB_NAME', 'petratrananh_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'petratrananh_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ERB73hzEyNdzQ2g' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql106.unoeuro.com' );

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
define( 'AUTH_KEY',         '2bENF-O|6S}c9=6,XOXk/96IDFeK%2?=B=d]WzyGUA]MOP)xu/[q*Y0wV.=FJ[ L' );
define( 'SECURE_AUTH_KEY',  'X$dP;4){$tuIEkiuHSpgS8jZ_qjAb=ZjUA;B/O4#c0qAN(=R^,]IPifKI+us9rv=' );
define( 'LOGGED_IN_KEY',    '!.HDd3)j&].8uu3cZ`SK%}q3NLBVAX.Q6$dUm_U&%mZw{Ed9WdQ[ajjgo,Y`MQzK' );
define( 'NONCE_KEY',        'aZ-PSk::o{W`+BV--FN&21$%GeF<K=@,C`B7ExT$Xh*;]J/,LRQw_R~_hQG%i+X6' );
define( 'AUTH_SALT',        'Dmftq=X/_7?X|QOahVO6O[5e*|)<k3I,rSe|I(p<:${qO|/f-io/|aebQ$!rv|P!' );
define( 'SECURE_AUTH_SALT', 'SG|c5~,<bF4o7Q1,:jef3q# Ge(k703{6|cgIo 9#s4FxG }6#_}y~Cx57/t!8Rf' );
define( 'LOGGED_IN_SALT',   'OuQ|Sj!I3yp-U7 (MSp&N,_t.Y0HAlRyo}hDooE*E3%}0DtDJBNYg33]hCn tGY&' );
define( 'NONCE_SALT',       ':zTR}@T3qFg}.lG+;3DVdk7Y:m&(|,4+wnOG-yesr{VGN5T?A]}uH9z9PJ*jOo;K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'repotwp_';

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
