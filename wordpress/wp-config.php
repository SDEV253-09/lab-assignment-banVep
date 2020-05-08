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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '$K}pS/m09LK fjQtMh_NY:5Iw@-L/oF-{X/`~mHP.f66<YLoyMhO^/s;)EO~C5 C' );
define( 'SECURE_AUTH_KEY',  'Hr&o^Ft$K&K%E,3,-RZu9k)BDNimR.1sOkr28^PR5U^HZs%GFT@$aGeJY|;gCx>B' );
define( 'LOGGED_IN_KEY',    ']Rtsq=d]WwNGn_V<#6S5w|6u|9uwI^n)5q6?YI4`nf$Oai[$o1J(6)a)[IeBh-!r' );
define( 'NONCE_KEY',        'M1Gh^p?T(ST*o42rN6_jLKCvWvzd[652ePm<61k~Z87uZgET+?s3K+Z.J[TZ@;*Q' );
define( 'AUTH_SALT',        'uK0,DC9&(T3&QI(v@7UlNmT9G(BHjjoBiBVTvk34V=7>2p;m26_NN/?P1!/8h4;&' );
define( 'SECURE_AUTH_SALT', 'nWX(kGy$]I/#}?C6VMUFnnht{l~m#[y(AEf/A3t)|@<.O=!E 44B<:dR-,2sK#;y' );
define( 'LOGGED_IN_SALT',   'i#*YKmp<%s5h#Fc;o([v+1xA?Ux8xz6]3$J`exe=mJ,tPsq9x1m$_:XE4_FmCig&' );
define( 'NONCE_SALT',       'IsNV(K7?`#[riB)m~AY6IEgBzYX#r+Lw=d{^bcmX$G<y,]->)fBAe{{u&8K&Daw4' );

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
