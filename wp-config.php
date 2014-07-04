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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jI&%SG{:}Kpo-+*2s/N|[&Lvy,{Pn|?E|d8:}r$c nzhtG| J8WGA]eeph7eO0bD');
define('SECURE_AUTH_KEY',  'A_YaD#*@/k(e|!ok[1T})w!qBC!T>UEkZRy~w-P$6$*4Qh3p)!BWnpH`#F{ntmb=');
define('LOGGED_IN_KEY',    '_J Z0U(2uN}j0SEj^ELF zu*crqY=|Hy~;P(MQ>756C~)_^&?L>+)x52a% ZrfuG');
define('NONCE_KEY',        'c)yf~J(-ZByS5^{BuX9HY@K+;9Z}a7Qt5s5+bpUF|<^Ln8qs-n13sK93($2T&6^Z');
define('AUTH_SALT',        '/YIR+rf(S#;i19eT<^}Vf>O@yKzf:/u`j+T:lj^VHS0E/EW?]VkZ-mj47s547Nn<');
define('SECURE_AUTH_SALT', 'G0K^|CE;u*x),O>mVHa?z~+~3:j4t5HT]F?Mys,4a{e~. F%+AM^fqt0E=FsrB3(');
define('LOGGED_IN_SALT',   'xT<(B( DtMYq0Qs,D]B3[->S-4+jQ[E>r}cXJq749}<#9SyF8;DvmD8glCG>SpAA');
define('NONCE_SALT',       '^5koMl)`:Z%?}hiN65vUld)t`z8Tui/Z3Ebs2ST+B8=|mforIS%M_)dLQ^(-ENK_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
