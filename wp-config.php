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
define( 'DB_NAME', 'wp_demo' );

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
define( 'AUTH_KEY',         'G?{/8r(lK]*}rEQ*Y;;tM0EtYNb0`v-kFPo}OSiW!80x++$!}WUr3o`Aigx8@Vhc' );
define( 'SECURE_AUTH_KEY',  'Ym97jeyxh}D57Uix697V#pGu6M6Sj+nc/Dl|Zq3_lug+l*S9X=)3#Zk+`S16fT{S' );
define( 'LOGGED_IN_KEY',    'B!(ym31Uf)B~:aD~Kl5]` [:W^N6$^u8ZqkE%ypjrHHpSufn6K.yxXe)XMD*V(sZ' );
define( 'NONCE_KEY',        'QV9+IXVrM0*^LtsGMUf{@Z<%cNh}j#bi#X]v>Kt!Lau0K~pb1G7IuHx[%KQ)8[$s' );
define( 'AUTH_SALT',        ']@aBk#PAi<59BEHR*IzH@LZ1NzXn 2a!fvS~vp5?[{A1mi^1a# <Mf/uU*>wE]~N' );
define( 'SECURE_AUTH_SALT', 'zWL6x}t$Ds5C<|!0f[7);S!aaprGA#A;Ij%)3h0=39W4#<`S3:Gfl0Ez!u&/NLxY' );
define( 'LOGGED_IN_SALT',   'xw[v&m>4@.O}!|2_$e>1 l326aj{omYCL43$jDIC%RJ}GDBhhKXuX`EJR&wHq.[(' );
define( 'NONCE_SALT',       'uOEa(3s*FT^P#+C59Q|N=7]=M9q+c}L)y>LeG74mx&8`hg*?VWZaak#MmWe6)2{Z' );

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
