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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'i`QWq|TS>$e4)K]WAsm/tv0Q98Sz ^+{SL,eV!VGzmB+XK0(53w]Boc10;DHQbUO' );
define( 'SECURE_AUTH_KEY',   'l9^ +IyS l%ZR2u@&BW3sofB,E~1TeYWISr,z)`n.NCR{z+a.4jtU}}{/KC#Kc]t' );
define( 'LOGGED_IN_KEY',     'rx=mkSAJ-o&TI0`6-^F?So.9?:R&,b-J&agzcT`Xq2Vv/SqYlKE!OFv0<msSfh/j' );
define( 'NONCE_KEY',         'R$k,yT=W%FXI$v8fysE1FIJe#ZC9x|ALKtEv;&Nz=q*n.6=w}XvO6(.b($YM8_5m' );
define( 'AUTH_SALT',         '<>t5q<Yph67X 16FV0BR QSJUP $ZoUSw(-Cx~c#HV)0lAGmV;xAmZl73}6&7}^`' );
define( 'SECURE_AUTH_SALT',  '.t8eR@et;.|--~fueNugCcuOXH7QdZ>!*Sx|:zjEi=[6tYW~puB7>%~T#AYEtr6$' );
define( 'LOGGED_IN_SALT',    'Ebe3M$kx&#z+JRGs[4Xn(7h3TYXZ(D`:r4Ipe@Ys/OQ@e$h~IUlKO6 )OkPrTyK#' );
define( 'NONCE_SALT',        'mM?sK?t-[C5?}XLP6+v8pw[@ydJUmu:?@Cy!eU#VXS~a+hkLPo b>`d{NI%u~BNv' );
define( 'WP_CACHE_KEY_SALT', ':K[*RwTOBHTMQM=+$B0b;`6pp^[T-I[KR`dqRLODqo6u,K73y95@6:*.1].54QwO' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
