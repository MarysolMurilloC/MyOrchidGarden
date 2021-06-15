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
define( 'DB_NAME', 'orchidgarden' );

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
define( 'AUTH_KEY',         'XXVeiqd=<qcG|/Snt2vT8SD&=an%MF63(l0,{BX*=@M.^uPI`7#Zf-S=/o_Hiu)B' );
define( 'SECURE_AUTH_KEY',  '|jYJ`wFI{=b?%>i;s(0pJ^C-R,lq4Dm!&.7!(M({?M0uhX3oj:0Y6Tt2w_mN{he3' );
define( 'LOGGED_IN_KEY',    'k=kFmMaENd{2X]`O>mUHaPV6/>I!^BUz=Ib6K?#6HV&0msr!CbHI!c04Bu?>m@o ' );
define( 'NONCE_KEY',        'Gz~}[kA;C2%8Wc_c~}],IZR1Xn#}>YlLR}(B 9*To%{P<r_7M$,re{JqSfl$w!e?' );
define( 'AUTH_SALT',        '/79d,&7040.Gbu)fcgxw]5~kE>x9T#X_b-JDeK=f9Rn2(7NWn//),JT$O.XJ>6JH' );
define( 'SECURE_AUTH_SALT', 'fVe[nxpV@iC> s21DlDEJR9U)Y|Zm|-nN,[S^{ObI8 OilC#*nsLo~-N@ft5(`=t' );
define( 'LOGGED_IN_SALT',   'w!A]!*6c[x5)HBiJ%lyDQ#N=30#]vU@~a&Uzio4[HSDSP5;]~!x5U?u5CK&?^4X*' );
define( 'NONCE_SALT',       '{+,@/oA%9&uf_E{~);&RU(DcH<I!GH|yIJFpzp{J!!%#V!xd}^vz(t</U*@N=7$/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mog_';

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
