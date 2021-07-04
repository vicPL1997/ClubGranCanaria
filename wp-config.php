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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '(8AccSwLE2NNN]QjwmisAZZu<[j7nD%Pq}NQ Uch:&C{dEpjF,;CsE9DrI2rlK< ' );
define( 'SECURE_AUTH_KEY',  'z}6O7p<26mUz5z@-(57?k3tk9nkjY/8~0&;9T`%xQ#81Krc9W++aeW0T8(bDeW7C' );
define( 'LOGGED_IN_KEY',    'eJ6<n)PCP`ooJ_K:@ma|uD|,;c13,vj,VtzGa(z:~5E(1r{8[Wzuw%cfXzBH|cd`' );
define( 'NONCE_KEY',        '4QgXcvoM1KCKdo<U`Z=UI^WQ.DtD2*N8u]a5dU!:)TpEQaEwWH<$poWZ&Qo~8h/_' );
define( 'AUTH_SALT',        'l(^(O4[ Ql}4wJS$w$I KhwJ46aPh6 lmlwQ<{f5RO`(R&A*QtN7;@$@(ELJ;{pF' );
define( 'SECURE_AUTH_SALT', ':#JVRc!pj8KL`:Sp|mBly*$qz2+%Ynt;A45b0hCO9Yh.>9PJ9uw;Vqx;+`!k]dZf' );
define( 'LOGGED_IN_SALT',   'tFWXe|/^k@I7Q13KJcAS-hD9)l[k*aLz?sIvI2-EP$P.;*YJ1-*t4&>3u:>5M(Sn' );
define( 'NONCE_SALT',       'WtI4AAo~D1yv@tNs@_x [DpK~s(v&>qdC~AK;#].r`<?:,^MfhdQ%7<*I%br1kTf' );

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
