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
define( 'DB_NAME', 'hitapp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '7p/J$n9.BH.tqg>d9Fd!QcQcKg6sg_ocTU#_.xLzd#49sz4))K;fU&Z l^DR,lQ:' );
define( 'SECURE_AUTH_KEY',  'uTi>P[jW6T*p~251w<H6aU+*6,ekB~F)3L?WZ6V<ON#*Vo77$;f|H{PIkz,hGUA|' );
define( 'LOGGED_IN_KEY',    '[+H{pKN=!M]R:r_5DVZd5),pW?>DhuI^)+PcUpJP;k$sL%| f49+p4c }ve|Eton' );
define( 'NONCE_KEY',        's{vhFm[1,=8sSG~&?eH;|A}9)RVFBt!nS:A/_+jbdsN-onpC~WGi7 (0MUBZ5K4R' );
define( 'AUTH_SALT',        '7r/P1Z:.%`VdoXx&yr@.5,O]3x#-l|1f_tz`^suNJ@1fQ4G7*[hf,TQ]$F*Fds@`' );
define( 'SECURE_AUTH_SALT', '@|2E?>$W2Ep-{hI_ Rl+w;G<f4zr7{hT/;zoH<<hCv<t5;8kk)QJTk>X?NM2S0A`' );
define( 'LOGGED_IN_SALT',   'fyA(O!QtoH[Z<kY{ u.vrw_84@U$[HrXJDm-~BmFUR2b4T6S#fAv0!f&sC?)}D/~' );
define( 'NONCE_SALT',       '7=G{+cH!*v2/&mvO~`m_}E!~mOTevXR=#Wf;OH1,D6$YdBe74u#R6`a;m|d8>(3l' );

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
