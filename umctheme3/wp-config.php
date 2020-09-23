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
define( 'DB_NAME', 'umc_theme3' );

/** MySQL database username */
define( 'DB_USER', 'umc_theme3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Get2busy!' );

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
define( 'AUTH_KEY',         'kOuCzY/t%fd0sdINe,(O=+ClzFG.b{B,Z/=p>hh8h3M|pa=l;+-&Lc4JwI1B:7;!' );
define( 'SECURE_AUTH_KEY',  'Yw7Do~+5f<ULHL.IaIjA)sc>mavbCT^J(i0p8Wv[EM=<]SHRqFgHiw(PxaH<c!*9' );
define( 'LOGGED_IN_KEY',    ' *q}eF#meOooq+VmqLUMq15fh7DfYcu+2&[3t[v>N/5fCrC`h5Cx#IX`I$wCXF}%' );
define( 'NONCE_KEY',        'H-ZqV#DY~;l}StIB@{GM8|o2VZZL#4gHbgR|_k|jg>q]@fV|1dYb|FYx!F&jv5XQ' );
define( 'AUTH_SALT',        'D<(r%a%OHpg#,:&lfy!(E1RL0;9%T8#z<bc2~$^S)%o|EH~+:yn%<4f&BZfLy6W*' );
define( 'SECURE_AUTH_SALT', 'q8}N,%=(rV)D*%bP|B*w_q3_aHm>b68Sd6i),5 _@}>z|,kNyZwq:?0)!~,mZP.2' );
define( 'LOGGED_IN_SALT',   'bzg,:q%T$pL6uKxzA6ufH]f}`OH)eZj+$ |a7C^>FIPzq@F)vgoVl5I}?.ybs)cR' );
define( 'NONCE_SALT',       ',mqN;V,T#oN+e%%R[TvD1;w{swGuC>:j.m$Qy^q&(|VHqVhl?a_g<@-&15kua>6]' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
