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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'polyshop' );

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
define( 'AUTH_KEY',         'Ao1)$d4()QxKtejNJ{e~*w}ok}-1#%tH,P@:eogZvbo&n<i;0R^E,4bpYV</9O0^' );
define( 'SECURE_AUTH_KEY',  'Cr3!RF2sY%?,RoX7Zu+wKC (~4INz0MK}}mEt@HpEYroV@n..~L3+iHzd;Fi}]li' );
define( 'LOGGED_IN_KEY',    'vf;jzH77h%lM{JD$^twc9mm:w_)bbJO~51wP#PueNFJW N>WW4Gi);3N),N9M+5,' );
define( 'NONCE_KEY',        'w4c5M<2#4&fn;6CSb_Bvt[7M*Eip=?BkdBI2%OdfJf{PF;Bk3n>L3 [2!.N3q6?v' );
define( 'AUTH_SALT',        'bp 8,+e$}n4(zYC5V7f?h^[)Q,MtlM<f#tdmSu+7LCQ$_:KB`s/W.2Q[Pm)]K-h9' );
define( 'SECURE_AUTH_SALT', 'vqnEPTfo5Hs4Z.O5rGje,`*f_6h`U:ZwmD&@b$s-K!qfk8RI3Ow<m>hBsP*5o,-G' );
define( 'LOGGED_IN_SALT',   'F+<aijLQqNVL;C p&[[]y 8S/<- q,f1C&0YzVeG8+KKasTqktwq6_G0?zj):uNT' );
define( 'NONCE_SALT',       ' 6?b>~_tICwd]PnIc EI+c<W)?s W|xZiHyb/BR*81sGf_OAV$Z[1%O#ak4WDLXc' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
