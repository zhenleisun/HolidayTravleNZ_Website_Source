<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '315');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
/*Modified by Alex Sun for Chinese Language Support!*/
#define('DB_CHARSET', 'utf8');
define('DB_CHARSET', '');

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
define('AUTH_KEY',         '}oNEr65%.Sb>D)j5A (&dD-Y>{F{xQG,!0r!`tKPl/~E)@9X>EwIKx_3V~pu}<|^');
define('SECURE_AUTH_KEY',  'o*9(NUl&RX<A1ukD+ka4%9gOAt:SE]uQ,|.5$M2:@p0a}MV;ZEk|s|] {ykp0u|x');
define('LOGGED_IN_KEY',    'hh|<[r?ME5}Nyk6chEpLA}$?nl3eE_3sYA| |Fh$mTg%_NppR9L]c[|DAcT}$kGl');
define('NONCE_KEY',        'TQTZFM2,vsrC,W?n ?$#{g]RU|_F5W/7?%r,2r-JX7MO[GY2WlBRkPgUwbgWW8~-');
define('AUTH_SALT',        '{c,)buppF/18Ib0A.N=YBK/-iQkiDpRxfU9Y|iQu-6u|l-!dra!<>{k M!hzW iw');
define('SECURE_AUTH_SALT', 'V@-q4b58O|34^I0{LzLx1r>a5lf}TA!PD;6T6,N:XKX[A~$4S9lD&BDNrR*Y3>5`');
define('LOGGED_IN_SALT',   'ep!W-@cl>{r,[3J7|(jFpo<2s76hOD2-iF}U9sx[>R2N@{,Y<h+g%gCZ(9`]V)Bc');
define('NONCE_SALT',       '5-L`M6k$Fi/5p6=iS@c@3+l$M]MBm1Li N<icRM_:DS??oo=0|rG|~2;:F#iqV%l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

#added by Alex sun to support Chinese
#define('WLANG','zh_CN');

