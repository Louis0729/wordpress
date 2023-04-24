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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'YJmgwUgd:EN5#?sxs9%D' );

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
define( 'AUTH_KEY',         ',VePN5:am%g)U),y^}axsODa<OP|:z=n4WzL)0{d,+(mr%Cj},JL.BG]V@Cn(@}s' );
define( 'SECURE_AUTH_KEY',  '0b1Dgu5clGxil|cz2{{W^[*E7j?n9m6uBs;Cx1Ap:&RyN)~+Jd;XQ#Le 7.Bdgge' );
define( 'LOGGED_IN_KEY',    'rDvTyCf~YDbQ wt.a>42pVy_d7D$7){[<=: F6h=Zn2}LXT|Zs1dbL=n2FoFA1{b' );
define( 'NONCE_KEY',        '1O5wAT8()bHGPv=6br)(^6gvl%=_.4/&EtIx4lU)U09}/d#tS/i]5@>d*R9P8PFu' );
define( 'AUTH_SALT',        'ZM>s/H9G%lmJggVo|.$V`jk.I&z_=V))pi]_GD4?jKz{6mj4O!i(*<31P2`i?$ ^' );
define( 'SECURE_AUTH_SALT', '2F/)?L:z<J1MezM;E;irW|I*ScY_UB@6)PYaH~.jhHb7LJZ$ rQQe$+alQkZ>9q~' );
define( 'LOGGED_IN_SALT',   '_yWrUVgim/m(rdjZw|8DOCLPn^C@lT +LMtahNeG~1+~SLC]]aN[L.hWZ5!T]GCb' );
define( 'NONCE_SALT',       '{EGBZS.8/[[*}2[$;!q?L{CBk!q4%a:.s)&=/Fjum8G.&WO$T$BK>MjZ`rV%fv8k' );

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

