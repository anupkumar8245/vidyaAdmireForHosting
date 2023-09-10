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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@password1' );

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
define( 'AUTH_KEY',         '?l{[@%F+|W|P~R+w_tubts`QxUt}c#R0;i_swsPhcgJ3c%W]3K#7f$zo^|o@xf,{' );
define( 'SECURE_AUTH_KEY',  '5-%92~e<EJ@sC yFY&9+LM#?b7l<fe8x8z^o{8=-=8LkR^H%Kdw?~dOg}E+v@z^-' );
define( 'LOGGED_IN_KEY',    'd-,>/ch{Xth4VQJ8jKD/_numx3zfF.Iw=f*vjMVRay.rSp4Q6WrJySN[DWca@Y5B' );
define( 'NONCE_KEY',        'l ~%e@d<}4WV;$v#Hp81CEp._x$Ji!UG,n8v>OEhGl7%3K9nhM<XkUqCXmm!g<sg' );
define( 'AUTH_SALT',        'aTdPuJLc[uVKCS2%zp<MOJ23?f{qcS 5/Q< c)s8>:F7;Kk5^1(J[>c(X9I?=p]8' );
define( 'SECURE_AUTH_SALT', 'XY%?r,s}/[*)SJ(0THSKZ@KfEIpYI{e;iw|LhAAd=iUQ*lav5UFK:_fG*Zm~*hLy' );
define( 'LOGGED_IN_SALT',   'l+_*)8MiW0kVn%`wPQ. 2V|x!Z5)$kK/Q+{`FGeSDgx_152(k.grA:-PN=&GsgPh' );
define( 'NONCE_SALT',       'A#VJEc#2s4z6b3N{yL%*^T8-gPqZ4Uz`u}OpCkZtAAYS9^TaXXA?CK8Za212Sx#l' );

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

