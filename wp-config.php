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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'HQFUwN27mdlWG_D;Hn3zM$m@ffK<+G^we!AnYQ8^M]E7r=~as>]!zg`(NX$w+TDr' );
define( 'SECURE_AUTH_KEY',  ']Uwf`uGpW?b9zuzo$,USH*cGTJ~.sX&Wic9I+;vx=ZlEkB:HG*yc^0_af_4*oe]#' );
define( 'LOGGED_IN_KEY',    'Xwa UVbyU B&196>Ap@Uv6/I*~e5m&#H2%`w[CO;UrAqn([NB6L%~NW!%pOLAJ#y' );
define( 'NONCE_KEY',        'wlQkb`bsS)I`U$jpU:1Dl=:H+%moyA.oCpdI4*F-&c4]&L{Q>H#N:>&84sVrK,d[' );
define( 'AUTH_SALT',        '#fejDS]f2}Kl0@p-_DE1*2A$<[U]9;mXBt~cNkjp5q=gd6X!;68:B.TW={@N^qtl' );
define( 'SECURE_AUTH_SALT', 'eN}|tS6W1ch$yB^qL?!;2BTLE>DrMB=M|riZqbrr.[IE8F3z,x*XHeij!BWRc0SS' );
define( 'LOGGED_IN_SALT',   'fMY{FVf:10m#xcyV_A9`.)[qc~7U)m{~Qn-e4*D7*_s{}k#}+k3Gr-`Yzv0O)5(}' );
define( 'NONCE_SALT',       'Bx([l?59NXRhgQ]+7P~[[%QTn0h<GR=mN6L+<mtg6~p!}`aPro&)(|J9|!GBZkRH' );

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
