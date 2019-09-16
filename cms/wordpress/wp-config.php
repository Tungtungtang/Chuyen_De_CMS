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
define( 'AUTH_KEY',         '1@f5v7]*R5awl[?2I%uE%-0n03SNs@#`%i[N<_#r]z=NZAu1lutl07O.A@+.SjlO' );
define( 'SECURE_AUTH_KEY',  'sA?L-_.[6!>y>>s%]Q4.$h$ed;m0(-6Zzu|T9+6O$~A$NU(C6;Q_;=$i^++NDa+*' );
define( 'LOGGED_IN_KEY',    '<MeFq>?LS#LCR[3JxbU{F)Y1p$C@@#8GDrT0&9pa*.0wW);V6ty[eIKaBbC3KPKn' );
define( 'NONCE_KEY',        '+ZrHWa),*1du4bFS^3g%{_4t(Z8#7skc.JHO[pQgw^p9IhJEeIOc[)rBgpl%uRjA' );
define( 'AUTH_SALT',        'HNY%ck!:e!;qged$)c(tpivmwM<8+l_$HBSfm0=.?a~i)jR0v_chbX0)#7GG*W-O' );
define( 'SECURE_AUTH_SALT', '[zPhuFb0gq SRhPi91o6y_;/0@L<WGoYW;_rA5oMPYuhk*JE @1;% o!4>c&d8n$' );
define( 'LOGGED_IN_SALT',   'p-@D3A-o9@#l6JRK5N0tWG(Mj19BGa{()wO<fVh43b^[|Gt?Xg} 5K?WUveL{q N' );
define( 'NONCE_SALT',       '6In_mA-H4^8p`^g%J)Ne-RZLE|dD=m[nWsR%`;K#eC.B&XlV^<OC5-BW@]zvm {L' );

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
