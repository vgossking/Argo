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
define('DB_NAME', 'argo');

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
define('AUTH_KEY',         '=)4M(]m1F ltuTBw`+fPZXREpO!c*0CqpB;G*?-#Pt(:B@wZMiM%NTsy~i`*#f-b');
define('SECURE_AUTH_KEY',  'A{MwJJ?_&.TvBS$.]Jv^]T!rHU>R_+T=ivCL;22p~$aM$uV!K-B-^W6~>AzupY(L');
define('LOGGED_IN_KEY',    ';fBw~_GouhMCB0$U$B%d.n(t9[;gtTUaYBM[s];&j]{A=?v-EyV*3;GE<?{@EKA!');
define('NONCE_KEY',        'MA!-x{FmchF $ ^fl]+CR?*_`s[XJFpSI`. !2TRp`>Iw~XYT C=](sbJ,EI?nFX');
define('AUTH_SALT',        'dcPqm}Z AaF62gcq4-cS}#T$r_`|JE(((iHC5<zxzK0e_3j(i3Y3e!)B:]y% DOb');
define('SECURE_AUTH_SALT', 'csX z+y,J>B+8m 2}5UGYOudo%J$Y[i>m[BOf,v-Ibc75KGX6S|l$Iu=.xsk=GAj');
define('LOGGED_IN_SALT',   'xg,Q/Xs7$i<oyYVr_tASZg546.+3S4vo,(E-R9iUeY#ETq/C%)3NJ1Nns+mhukAs');
define('NONCE_SALT',       'lZ/_NP[WxBe=g)+N-3>nunZ4hIDn.RM]xImYFYBhKS02_;_*;eO>|dtMv80fAao{');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
