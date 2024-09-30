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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         '=H/A$(}_NigSkipJ(`zD}1g8w}Wd17H^c O.!5;$GidYE~?0^Z?(]]xID2!y+:uj' );
define( 'SECURE_AUTH_KEY',  'x2u2:tRSbH+5E,(.8*D(YV?n`LO^xIu#l%!QAVk?E]r7`N3Hiup1xh`7ZnQ]EY,#' );
define( 'LOGGED_IN_KEY',    'YfR4j<f>=7vpG 9&g#J5sQM420&ISxT Z6Nc:A^~9S3f!(s[r$M..?~E>:c($Z8{' );
define( 'NONCE_KEY',        '&,!_.?c4@S`>aR3r{92%k94;pqgtLrM_d2|^;vhiaz3ciR*<500SWvs /HF!HkQ!' );
define( 'AUTH_SALT',        'PC|F@Y3.?LxXq[ah/AIIT&/1I:Sl,)oE9#2q._EXL%Z8b4Y0cg^FKa>ZB@Aq#oSk' );
define( 'SECURE_AUTH_SALT', '@C$l4Vx,3H*p4v$GQIm+hq_NvtxA%qFdG2Yj#C(m|~sGu|Q`w_Ej8fLcvF$ppbz`' );
define( 'LOGGED_IN_SALT',   '9>td#.E#NDq7gjsVIjVYQ#kN!#B^@1^tw~RDf5BId_c)$tKa0B{DxKS:+{j]|;i,' );
define( 'NONCE_SALT',       'n<acr x<#&nCo~uBOgKENkqAT[:Q5A(H|%oceP^V#6TG[p-$m+G-&zW={>lH!-Xu' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
