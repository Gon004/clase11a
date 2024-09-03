<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ox^y,7@;dfrBxoNUIY9]cb#=B`87C<f&sd0rX!p^%dfw{]Cj/T9<pI+q)%R?APH:' );
define( 'SECURE_AUTH_KEY',  'p|P8l3-^D[Bf,6GBK|)Mj{oFnDO;%cAA&z5c|a)[.t%oWh^lI;qI&OK0p<fa-|=G' );
define( 'LOGGED_IN_KEY',    'Ft|71! VM:WCix$]h=t{whs (o{M #;L&IG|-{//dukwS3m&.o}+eJjM0#a3pJJd' );
define( 'NONCE_KEY',        '.|idk_1XB>Z@t](nYDHs{CKEm8n{-@Bso3q+@_v635tvEWPXNEt@1&V,MPp,`c/R' );
define( 'AUTH_SALT',        'j0O]kQ{T}{w#qx@xLG4L%-[R#(^as#mA)BdK8:xMIZ}`ZJf(}5|:%`<=52&oGvsd' );
define( 'SECURE_AUTH_SALT', '_b<Tl@zqPG7!xK=1MYM4_rSRZtfP7=8l a9$%eXsWKd&e0^j(kFOuShs7@0LdoDz' );
define( 'LOGGED_IN_SALT',   'J@;@u4LwJcn!u*~]ntj.VjInz2_2MB4G[{h4WYkbu BLG1$IOL)&s4Tb!K|WCu[u' );
define( 'NONCE_SALT',       '7-XJ,>c(xzc:^V]A][YyK.f l XS>}2<[$=l|s&GwfPT0nCBW$cehXs|~@*,C[fi' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
