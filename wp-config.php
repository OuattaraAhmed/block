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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'c*K tR=7{A01+K~=PpuHM]MuN6vDmueZ671CHz,uf&P5Nm}:!^1r5^jq@<ZQj-0]' );
define( 'SECURE_AUTH_KEY',  'pnC<_pK_!MPVc|bXa=DN&T?/u]^kyMp,T^a`wbN][WgtC~W5m>Vwa1?@;Q(&}0ii' );
define( 'LOGGED_IN_KEY',    'Fc;ae`iz#iOP3:RAYk0?[;4d@y<AAEtff8<K*G/$p-f1ss,$gM5[h{k=]=^h3f=O' );
define( 'NONCE_KEY',        ') 0}RMhU9}l/Fml6O!{`$DmiPVvBXdQ:tX}-h1fnr?|y OH(B@5=jz.1:Y5)1sYu' );
define( 'AUTH_SALT',        'e-}j%=H;!pQ#5_3X{rz#4N]Cbs30VFNqt9x?u@;[TYA?@B0aGqi8L|($hl6:T6WS' );
define( 'SECURE_AUTH_SALT', '`pJTXEL@u|D }cq:UwE,:XlnNv1x.iFEQed_=:U2flsV[*;.q&Ok:APRyqb!z$Yh' );
define( 'LOGGED_IN_SALT',   '>!2G),5q<2mm]de>7*tnnV7oIKhWJt!],);U!>8*XtM3fDEy)5ay*WcUIxsvvhh%' );
define( 'NONCE_SALT',       'h?ELf];CRab:?JQqh/+KQoTXZLg(RdOMqO155mv+W>fo+nq,Q_~1#;y4;Y;Y$*c|' );

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
