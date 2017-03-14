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
define('DB_NAME', 'ia');

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
define('AUTH_KEY',         '+(t#}o_xkM<VWdF}j~(g<Z*z98k)Nz(R$=~Gq<?aQ#<H8M=BpehjWU7v<`NK#5>-');
define('SECURE_AUTH_KEY',  'VQ(um9_STM!^v/:%RCC^FE1sV7h#b<(y,>?t1,`1O)MWdNOJ%O!ms32Cp2A@8.Bs');
define('LOGGED_IN_KEY',    '{~AJy}xnz32LB3xZ3B$^/rhEL/+vH)ZUQ,$ brph@9QKzk3,O#M6yS-?3D~E((0r');
define('NONCE_KEY',        'Ht^%M*D^fSWgO(O`1:P&uNooN9n$7X47}bB+VN;;Q}s0{UKe[ZWZClyr=s2TB+5d');
define('AUTH_SALT',        '@DS}<Y3JVC8iHAiO>8dJqhFxr m%s~L[+n>DWq_E}/f*Pq1ZR;}F>K%?e)4c^I<c');
define('SECURE_AUTH_SALT', 'cP}*v=LOkS0x&O2|=z9u9;-@Cc{n7hv:41/]FO#Dpie[f<mQ)|3U(A>JZZY}-6tN');
define('LOGGED_IN_SALT',   'mjrWlIyAWDF`js.r14Boy4mIZ)5s_bbDsh)LHlV<em@dtBJ]UgZR7j_sFG:i5Orj');
define('NONCE_SALT',       'gwjt3 MGoY-W0kfRzC,2J 1w0Ln9T(|i&iMf,Ia&ZV$RJ&N;FN^_l1X&2ZV^|^wR');

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
