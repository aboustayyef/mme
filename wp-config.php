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
define('DB_NAME', 'mustapha.me');

/** MySQL database username */
define('DB_USER', 'mustapha');

/** MySQL database password */
define('DB_PASSWORD', 'mm000741');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'o+c7nJ:%8R$%btgE:!`>J*9`]t%RB|.o+c+Rn9DaSqloa%S:y.T_A|-Wes7W9s:8');
define('SECURE_AUTH_KEY',  'MZ$Ls13nZ;Y-/l#K~huw.Q-*4fC;W{,77#VDg`nAYyG@xaQ|g+`fg1QQNaovpm_Y');
define('LOGGED_IN_KEY',    '|ZlrAS@zB!,Lw!3C8L4d>!;U;}9>%Eg<V!E*-8+(R?&~<jpwW(0;LR1;k:^`C}|u');
define('NONCE_KEY',        '2dSfBsM!E2*tNOA<f-M4yu,,]J{w{as .O[UD8`o&>v&5+CZSmk^c;6|Af<SCx_C');
define('AUTH_SALT',        'Q=^Y).W(`&O~O+%O~VO1Ox[L|E@s^||-<s4C%vkH.O/llYlbR<G.QO^pdw4|+%-l');
define('SECURE_AUTH_SALT', '4[-).};=K4X7V/*md4aO#+yu{l5*G-NP |XswCfF`flfA.fydBhJ;Q[jTgmz&OP6');
define('LOGGED_IN_SALT',   ' WoZ%u:wy+[x+w~$@q08c,4FQ[Er|=zb+:13XB=w#6,ww_FID&Ww`4PpS=>;yIN9');
define('NONCE_SALT',       'C9|R~;pYownN3[-+JEvUO;jAOW7{q)ff|`S=7Lp<57<Q`oOrR1{vW70cH+lPCx +');
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
