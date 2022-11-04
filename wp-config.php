<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-livecoding' );

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
define( 'AUTH_KEY',         'D(d|HDr&6l5i;u%]/+ht36M/5v3 T.CP[~w9hhb[MY[H[Nyj&grc)~#>41H0s(XV' );
define( 'SECURE_AUTH_KEY',  'QCq:z>!&2}0*X4*^DRg39whRih<yv!Bh{zN]UvfOu(u~Q6Mu6;,99c0^[WJj?Ro^' );
define( 'LOGGED_IN_KEY',    'Xj>e[N8y>-n515u}!t[NM]Y6A7QaEj*&`E:Dwh}:29,t#3TsMMEoQG|#0sl27@n-' );
define( 'NONCE_KEY',        '2{KGMclQ<J~,*~VC-KqrDI}0,}4YXV(rk>BR%S {TXDCY8EiB]LPk<+6E/>RMu=0' );
define( 'AUTH_SALT',        'Hd1$;7:DUAk8E)7 sz/A[W#,hq1%j|>F*r!UVn&M04!1@fT5iq21~N5p`ueW>G$*' );
define( 'SECURE_AUTH_SALT', '>A?W!W)%<a0gY*&okE|9bq-cir(c8ToPd<1kiB=f>D3dKlv2Uc4Kf? *-v*E?U||' );
define( 'LOGGED_IN_SALT',   '1,d,15C%W:nwYHzvKB24~xyx_cMp^+hvlV9h-#r@pIaz<XdPV|,y-,-(Kr-DA~zs' );
define( 'NONCE_SALT',       '0h7|^XW]o(GpSS$Ng>aK{Hr^]e9$eRFGm|..3Zf@m5FMl^c--(Mv6$-`]g8Jy9eD' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
