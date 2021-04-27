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
define( 'AUTH_KEY',         'uZj2@^u6h.x]k5Ty81*i90Q~)Mc2TPQQdu*;PaUF^kdQo|;HF^6;v_/^G5q~s!@C' );
define( 'SECURE_AUTH_KEY',  'C{ZRl98TtLSdy85}bJ$z(0q$WB8ru@oGO;TN!w#r.sqEw+M@8)I_bgCH1$IYkDt<' );
define( 'LOGGED_IN_KEY',    'mTQ(?}/_nq=uek1w9cbK-D&6Gm/ EHSk8/4oyf&cdHSK->x,<rqt/WL@pzL,K1P:' );
define( 'NONCE_KEY',        '6tvKiz8E20~dbifO}a=0P?HX(Vy6k247g&)0V6xvr;S24a0=t+UQ5.~%`g}f>)5/' );
define( 'AUTH_SALT',        'lXd`>cK(S)X<B__.1KK&)#31oG+V,:7b|xzl%@bs>b+DY;>IX=pC^>B_G+}3H[mx' );
define( 'SECURE_AUTH_SALT', 'K(H5C+PPsC!}0uKQboZ1s5:YIFogGI;<VLLAl*+pmngJI[gW`Ty!Gn1WX2Cee@cC' );
define( 'LOGGED_IN_SALT',   'vOqZT}~I)-W^E1 4.W}mi(95(gRe>1^{`maj2d)R)@]Z_;6w?<JE/(,eUpT2D D6' );
define( 'NONCE_SALT',       'i6FSz~m(pxf^NsZDE)}41#GD`q}@2F$x !G--gsU3JDo888%/)OnF}GVIKjgEKZI' );

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
