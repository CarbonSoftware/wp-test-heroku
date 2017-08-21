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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'dips227');

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
define('AUTH_KEY',         'JvZ`:dh64-#*m|J(}_p%,}M-n_bN#J`[e[}&Q@GJPF}ISNw$`|[BMSM$SUBb[=Qz');
define('SECURE_AUTH_KEY',  'o6hU.[*aGFKl2yu/cO76*(hJ6qRnL(Z&vu U%U;v6`(XD?Ho$r917Ry#+j(h!J=3');
define('LOGGED_IN_KEY',    'qlAVooUL }zQ0`vV#1M_Hxuc%>}l$pnFd7pBzE2n =%&-fl,g~S;_Bsnjzjj<+we');
define('NONCE_KEY',        'XKqk@)z@h)X[=N`>[WV1t_ogJ0?%ezagl6FOc[V~*1 K)9(8 :iqqe9]yQ) QYO&');
define('AUTH_SALT',        'V=[ +4N[enz^Y:TpZ`Yi}brit(mloSE3ESM[dVb;yZ]]D`}ho,xF9|Zia2Z%mvc%');
define('SECURE_AUTH_SALT', 'cqVX..t,<4UCTx7[k.=(C.O&wQ7(h]{bA(A}W[S?(Zb4^ZIrCRaWY4+M@&kvrnL0');
define('LOGGED_IN_SALT',   '4[wmb%1p2;1sdX-Z*(`~`N]>o_:y, _~maXKP/K-RFmHL9=@t+o|{XOyO3=we=yV');
define('NONCE_SALT',       'Ukofl#`Y.iMX3/-aJ_uE,}Qw1GWJ6%_0{=L!wI>+Eg}Fn5Jj/{M~00`CBF;G0;sA');

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
