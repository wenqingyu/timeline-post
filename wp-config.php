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
define('DB_NAME', 'btcc_ganalytic');

/** MySQL database username */
define('DB_USER', 'thomas');

/** MySQL database password */
define('DB_PASSWORD', 'thomas');

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
define('AUTH_KEY',         'NDBk j?)unepOl|<&#;+.t]CSg+Rg,]#3!B`3k+Q.B}gsn@k7!zEK<IO^*C4Pg8,');
define('SECURE_AUTH_KEY',  'zLp<SC]Mf:w`q97q[ tv0I*>FM/7 +J[)&)Z7+XTz(W08%Jk/W(HNQOaMw#jL*W]');
define('LOGGED_IN_KEY',    'dQNC%z=NjzUs_t(N;5OKqE!/.%H7=`^#W+>/&2[uQb}eetaW#*HW68Fg*$%d__+}');
define('NONCE_KEY',        '.rB D_,|{Q%-TIo,xv~m=:rff,#(D%-mTGHslIKc$U7[O[K+pCuNSIgyx=9ifZV$');
define('AUTH_SALT',        '^f1`b!|g{`nbhQ3f`|WJ>z`j1kw87#pyD1C9Y^u[FyIiy*}bYM5JT=Jf-8Cj(f5!');
define('SECURE_AUTH_SALT', 'OUPk+8yCE$Irf%Qw-G^o_!ofeY-nW>J-5un7@!9si>O0F`]<~4ry~+$+_mT2$E6d');
define('LOGGED_IN_SALT',   's2Ym:dHVt|,>U]AB{sy:7zl`^p@>:|s))(jlqpA&?]NqTdVgG|Os/Sq/2{Us-V|I');
define('NONCE_SALT',       ')7PI-{sBGBMe`&`l^!n:!7]fLLfQiBygGzk!|KgL|NAv8d-G=+fyzuXcS 4m|[ZT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ganalytic_';

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

