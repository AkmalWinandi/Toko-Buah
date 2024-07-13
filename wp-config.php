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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ex!G+ufG(P)X|vO6tp4QKd!AH9=~|MiWtw8?|EDMt?]=]1rgtt#s`[M$c<Z<l8Qr');
define('SECURE_AUTH_KEY',  'WeFG12Us)k^R{pP.;xbQF@AC5%EJjES*}~ZD3aY+VmlyC/pU~=!V>:KeZi:$D[xQ');
define('LOGGED_IN_KEY',    'EU#Oc)JzTeDulLQ@z>5t>~:F|E.Z0bx/Ew40y/<.k!Wl{K;?E(9QgEg/|.g4282i');
define('NONCE_KEY',        'k5xF.s@:g>iv+=27zf<8:G+[x:zJ<rW([j^lL>XXA4*+0L`#ZEBnwH[>-&a)3rW:');
define('AUTH_SALT',        '{-s7|w}(JOmnk2wVJiVcAys0_HM:-d4ZDtECZml@2EY=|$NTp$/NQ([c:<gR24?A');
define('SECURE_AUTH_SALT', '#,SK~ul]fe(ClLOU<KG2WkOH[ztpBv)e yH/{-V4P.W7bcl#1r@-F$S6gT?+@#|P');
define('LOGGED_IN_SALT',   '23L7wEk!cdFz->+b~gi9):8:Q<<vAoQe8o??3l[R|{Q;%ep5sqJ(}|$}gj0s3F>;');
define('NONCE_SALT',       'TBwY2`xY$KpkEum0lw1b2]NMKhq&m(x_D<E~}kx4c83fY}AaY9?k9:N:I18PY gC');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
