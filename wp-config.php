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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\Dropbox\www\on-off-studio\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'on-off-studio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oxn@t|`|I<WE2PR^Od9{A&U.d80|L)O}DZ>Zmn1g}q[`y0)$K5C5e*LMxtEglJWl');
define('SECURE_AUTH_KEY',  'CrkBj,SDKp|/ybp7xlhbiK4_:|]9X<gx9!o1[wdrP[pI0wp/tsjJ2P2+Vw+v.?{P');
define('LOGGED_IN_KEY',    '|P`uZ4Nw4u!a:_=L8rIF:C=ckJfXudz10as9=Rgk5XcJ}LY|3VSN,=E37Xg`VRpT');
define('NONCE_KEY',        '>7R#;-N#]UBL)F.zwp+`(yy(?</ ej$4-dS-._tlI%Cx@Ru{b^/16~l)VXs>:+#I');
define('AUTH_SALT',        '~_vh)w7mMK$Ecd:0Cb#05J=A^lRUetDD^p8W|QYu ^Bs97/A;i(Z-_cv1=i@M3aZ');
define('SECURE_AUTH_SALT', 'Ytq>F(8a*(:@v,t#S%1WDT-[8nd+k-{y+B~H|jE6=]t.7uD6y-V_&|yK CH$8E])');
define('LOGGED_IN_SALT',   'Sb3hoEI^T*@#a|b+lTf|kViVeF*yp-cN4yA&rFs<gv|kG7~uX1/6nkuRL39~u|=H');
define('NONCE_SALT',       '5<^Pg/^-g+87w!t1Kj /osoca,:Y(-W+espreS.,?Q}Bh>7Bt,-/Ycl5-WH[}fI;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
