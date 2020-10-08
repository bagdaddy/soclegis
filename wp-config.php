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
define( 'DB_NAME', 'soclegis' );

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
define( 'AUTH_KEY',         'k(W{rRZ;<]lF=F^PF%+ypl&(?U%i4>K~p(kcc6C=m,4//h[)WR[UYQ}1|jmYlpZh' );
define( 'SECURE_AUTH_KEY',  'yc[x/U362Q<)j*_$:[enwO-dbF:4uuO%.ws8woZXXbtOZMv>g]HZzR@uMoQLfE,r' );
define( 'LOGGED_IN_KEY',    'P<S]MX%;0m~=ACe0B`a0.NL1mp^4*V6;_#)LXO);S@66{M.b {X7`@qu y}J?RfQ' );
define( 'NONCE_KEY',        '>:q*H}T$)d)PryG;NvYJ<}:Tt)3|]#7EM5C]H~4<:lXHp$XR9i~H7)~-|$8A+#-?' );
define( 'AUTH_SALT',        'Ga6c*ecAakBj*nBSKX*+v_si_ir0j~`MNhPAU$><uO.+YX%oI$`exu(-%D?NN@gP' );
define( 'SECURE_AUTH_SALT', '|=Oe9C%Ha1K KrwH-Ka]4t^I+nZ]}[m<9;0oCkc jvSlJL F@kv^A1,{^X6d.VHZ' );
define( 'LOGGED_IN_SALT',   '<<d-}Whh(MRqB+~(=:W4,96=DsZ8f?8dzo+d,f}UWpZasx##y:AY`lgu@Ld{_h /' );
define( 'NONCE_SALT',       ' ](sTMOdP%r$yo?BYdo=~-]Cg*+(v;ow_yH~KmR8islRL%zWij]QahfKG~hk2+BG' );

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
