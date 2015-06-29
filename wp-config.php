<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

switch ($_SERVER['SERVER_NAME']) {

  case "local.egg.com":
    define( 'DB_NAME',     'egg' );
    define( 'WP_SITEURL',  'http://local.egg.com' );
    define( 'WP_HOME', 'http://local.egg.com' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST',     'localhost' );

  case "egg.nowwhat.hk":
    define( 'DB_NAME',     'egg' );
    define( 'WP_SITEURL',  'http://egg.nowwhat.hk' );
    define( 'WP_HOME', 'http://egg.nowwhat.hk' );
    define( 'DB_USER',     'purauser' );
    define( 'DB_PASSWORD', 'puraetx2015' );
    define( 'DB_HOST',     'localhost' );
}

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
define('AUTH_KEY',         'qD,KR^ _}3DM^k$^+qm8#n#P]N^|l1Jg:jRKqF|p_+j~O:E=4H1-b|On-ISVaEk[');
define('SECURE_AUTH_KEY',  'w;#-v%zQ/H11o2ScrAv+E++-uQoFT^|b`U%*8.AZ-~ %e!.hRW0|`rZ@||lyE%J*');
define('LOGGED_IN_KEY',    '}(02AnXDId5:B-g_>&kzjEJ{ek*d13+-;A`gd!7~1`msx{{N|% eI/y5(T-I^p|r');
define('NONCE_KEY',        '|&r9RF:5bjz}p;^Ujca6Z(0:F*&c+DwMc8X4$~=_v]_^bm_h8Dt!0<(#}+kalezO');
define('AUTH_SALT',        'w+YL%He,=z`wFFc@CvU>?OcZM9>):$FzS)/<03k RF(`$WBp${wVN@;*+b $R]:B');
define('SECURE_AUTH_SALT', 'L0ma3b5+kw`@m99z48OJ#V#j V7Jr;y3Lj+{qK$5zs6w8T<16[3>j)zZ@dXm6[=A');
define('LOGGED_IN_SALT',   ':v7)bZ,Zw)H:=@y?e 5DlZ&H7^k;-O;99fNLBGEU=OM.~l!~Q]#IRCMqjlfB2jf~');
define('NONCE_SALT',       'CJ6VP{ODcz5rdq0qCTc3z0L6wKP6iZRBa_ X0Jm_0uV|<+HV_RAdB|)N*<6?+gbX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'egg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/*define('WP_MEMORY_LIMIT', '96M');*/

define('WP_ENV', 'development');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
