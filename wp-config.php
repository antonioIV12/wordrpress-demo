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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'HQLzW4Mc/KC%_K()uULx3)}|adMV%w84H5t<ff89`rbW{:N#[1ef*0-Wt[jU+dx@' );
define( 'SECURE_AUTH_KEY',  '#?bM-e]l~U61:aRYOF.<ai}%Diq~Im8VFd<t:PBx+ztd)_hy2 OKat6)+3p(P)Sn' );
define( 'LOGGED_IN_KEY',    'y*hE>,,GtUy y7x?rI)hwn.9qDrXLiwaUd%Dz/pC$2ny`yGLCv!5pmOlZYkCE@iT' );
define( 'NONCE_KEY',        '~6p[CXk^a$CwwM]N[vo*|d;FUh_w^}*qn{X:zlBvsTi2+Mw[V*(u]XdzB-=vd1M?' );
define( 'AUTH_SALT',        'F#o+HNFU75qTRp^h5LZBd#%+:ZJ<5< a2Ny(t7z4$Xmy-^vxr5Qqib(IoJfhMG,a' );
define( 'SECURE_AUTH_SALT', 'dMseC*;Pg@tg/L,;5%|`*7gr0$|OC5*L5V~f[q#D7U#OoZv*+lTD SE#GuvT,?W}' );
define( 'LOGGED_IN_SALT',   'S;DT-]_lI2=sDDp/v w=V@w>8=x_QcoTT4DV!A=&;g&=?daAQB^%-,hAB>L?YWXu' );
define( 'NONCE_SALT',       '+}8X$^):&p-u_=V6v8Gk&x0@uq:%7ed:g6IS;i2:civQZZu.Ik0m>Smi_XOLpcj#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

// SFTP Configuration for WordPress file operations
// Uncomment and configure the following lines if you want WordPress to use SFTP for updates
// define('FS_METHOD', 'ssh2');
// define('FTP_HOST', 'localhost'); // or your SFTP server host
// define('FTP_USER', 'your_username');
// define('FTP_PASS', 'your_password'); // Use with caution, or use keys below
// define('FTP_PUBKEY', '/path/to/public/key');
// define('FTP_PRIKEY', '/path/to/private/key');
// define('FTP_BASE', '/path/to/wordpress/root'); // Base path on the server

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
