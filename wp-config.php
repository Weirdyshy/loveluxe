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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'OF~1E:[@$&z{IlK#n~4v3TW3Q_(Om[K)GeqLJ,J ]?L1-41O?*V#e>SemdQTNf.N');
define('SECURE_AUTH_KEY',  '0P0n==4`%J3]hr9sFv03lfZ!a+`h,u`^~alDf$=[-Jc(AP{B$h9 1UUdss3&X]L(');
define('LOGGED_IN_KEY',    '0RccJ>eht;&T&uPSMzgLqzqM93X<ZM^#,:L$ J6o(QFcxH.o^$?GDt_67)+<1i9w');
define('NONCE_KEY',        'oEKi),}+}Msq5]yZK4*i:opvhw]=mwt=*H!I{hu@Ah<q(EU]]RCcX^i5+>-bM%i*');
define('AUTH_SALT',        '@WP^KH|mG_Z{xN!b~  +oo_RrymMH3[F(!SLWHW&&E9vw~.JT~M hQMAyIO4kO` ');
define('SECURE_AUTH_SALT', 'E>y>J]Q~>4Ags)s<j=2TK m_YY:zp O-L)JFzTo2kg+Bq.I|n:{jap[cpF27^QRo');
define('LOGGED_IN_SALT',   '10LA? ie.,jnqlYmG1.z0.(.fuL.I|X~J+AU1^uI90ubb9-ohsj7>0o+`A;*>v>c');
define('NONCE_SALT',       '1;Nm2W-@|e an@N{vD5*S^*#COs14H*=ea8/q!h oJ&~SsX}hGGmz4m&STd4&WGk');

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
