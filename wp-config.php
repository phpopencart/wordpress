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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*|v# =o(g@r1Ge6qOyH40S~DhB*S=[qJK*.tl.8;>pQ@vhV j(HS4:_A,TCj<gJE' );
define( 'SECURE_AUTH_KEY',  'XKDx4!3KqoVuA[y0Y */8]y~J,~(E&w!6Ozq..I{*$E9^pNpb`R,rnr@F*K+`.Xv' );
define( 'LOGGED_IN_KEY',    '*hV}T0@3AE52i Cg!=nq_iEcj>`(6,rl/Iz`1T!u;P#R?E7W5lO0]Zg02yD vyGU' );
define( 'NONCE_KEY',        '0HN{&ft[V7g V7X0Okp9bKW/4EkrNXmn]EGpZ6;NhrK!H)8_{de<Ava4>7Q%H= 9' );
define( 'AUTH_SALT',        'JX%hk~}d.QV].!@u2,a+Np;)^wnE|RHJ>%@Kf)t4@%2xABOiQ1.:GUa%h|WO/2!p' );
define( 'SECURE_AUTH_SALT', 'y)VxNdh*Tuy&]K&-l2zmbR&mO-RCQpb),7TD}3f~;@~)[Lq9cC1_Hf{ihsg9_fvr' );
define( 'LOGGED_IN_SALT',   'w#xx32}TZSk>/r)JzgI<  R*VC39CH08@olp6mbM]c}_5VBPAq:Mf@]p|0tiwd/,' );
define( 'NONCE_SALT',       'e[&Utv,:,APLr3|mx9n,FbavbyhCRy8fz) Lz)YLRJl*T|`,Yyxdux,7r[$sH4wD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
