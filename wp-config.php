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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'matside' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'helium' );

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
define( 'AUTH_KEY',         '-c]TL_v5OBCEeNJUg+I$T^*jqVaj ^#3aP9m6X=Jq?L53ld~<aTmE<q|`xism*`w' );
define( 'SECURE_AUTH_KEY',  'h`~o&MJ<QuV gY[RRQf_?3WaMD*H_oRk69vKV%dml0ikbINeB3~A_%II]CkyhqXS' );
define( 'LOGGED_IN_KEY',    '6<7:yU^b^-esB$BV7[a*uc`v1T|?TK>,DvSs2vnx,:gfq-zE-.n]9AV#0W2>vx:i' );
define( 'NONCE_KEY',        'g(P#*8H=RPu(hnGhfG=N}K/*WY4/2^Ngs1&O}_Uu>Ch(cipoz@##7,<_FF9kjKi;' );
define( 'AUTH_SALT',        's4](^knbl`/FWJ=U|AiY:w-Uch)/AI@PQ?XRG.#7G)tkDr~E9#k:(d,~l.D%A.ND' );
define( 'SECURE_AUTH_SALT', 'RdS5nY{J;2.s#X3hm9<|QC^/7/T:tn+^tkS[Mg%h:#<.#6?o=VI*<nl~,iHXHOcj' );
define( 'LOGGED_IN_SALT',   'beEl.JZ<A56|cj-6]1bo7;><6:lCMh~dIB:AF/!3te=<*8!nm(b) 5e6Pm}snmNx' );
define( 'NONCE_SALT',       '61v{lxBSe3@ke%-W|_xNe4#6q5;zW?3I]uMlGVhe^(9_*b,O< 4R 8mhjXM-4ygz' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
