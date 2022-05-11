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
define( 'DB_NAME', 'web2' );

/** Database username */
define( 'DB_USER', 'web2' );

/** Database password */
define( 'DB_PASSWORD', 'Vw6XJuyKfvHHU7i' );

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
define( 'AUTH_KEY',         '>}5+7!X*pv1D3uOePG|lf^U3&AsLp OD_g2mqZ=pU`)Alig~04Pf?3zVzrH;jXs_' );
define( 'SECURE_AUTH_KEY',  'f&0Ug}w]huEx{ZF?3f$7F-v:NGx4p>_/dE(e]|+lN?EXj.<UC$GU :f=5Ix`#?pD' );
define( 'LOGGED_IN_KEY',    'g@#0iSnEc1X$[s5E5Ek<Xahj!U8fe:*lG_GnXy-?F0+PEd)oK{/!3& g-C5`BN0f' );
define( 'NONCE_KEY',        '?GPb)[iC)0x.3K}pc_a`$wq1++:Y+5V_(;.^H2Kgd5QVnz}]Ub<~$n=YjrGe{yyI' );
define( 'AUTH_SALT',        '^_=q=acHbyG@c}%K8 lXufGc<R?-h:KPx+-f`[Zv5q:n`sux(L(B8W@}lYOIBzBz' );
define( 'SECURE_AUTH_SALT', ')qxr5aVbYQDV5>dQ$W=Jks4-.Ec7;v,f{Trc<JHR5X9+fW1^1^1+l5ue=;kyY#N%' );
define( 'LOGGED_IN_SALT',   'ydmBSmkIT93(I:bCw[m..Ryr:VZfTSSN5`tZwpnfCV$d@ +}L$f,8?0N92-a+uha' );
define( 'NONCE_SALT',       'f,]TgawII 7SyEW1yUWw-PSku5<|q, l:0%UWI8H@}P#)H -9l(zDm]!0j5IhPtW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_uciteling_';

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

