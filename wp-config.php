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
define('DB_NAME', 'latitud');

/** MySQL database username */
define('DB_USER', 'upmedia');

/** MySQL database password */
define('DB_PASSWORD', 'upmedia8039876.,');

/** MySQL hostname */
define('DB_HOST', 'upmedia.crcq0jopmo84.us-west-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '^b=7}HZ va8<_$.eFi{ol?YA&-Ri5Mk^Zv8ELJbF>[56-kg |`#L|;j4ME@Dras|');
define('SECURE_AUTH_KEY',  '3{w|wO;bU}YgJke)Tb!p%Yb9.[k$5Ud@edHbLq6AW>1Ch@t j4t8h-_oP4QGHbsQ');
define('LOGGED_IN_KEY',    'FNI3:Z]9_w|8*lR/@x 9yqG}~y8+jF~D<]@v(:;c4I[k+D`_ffs:$_W3Rt;Zg-- ');
define('NONCE_KEY',        '>!L,:$<U<<6RJ7RbyVj46oO*l|(psq4MzyVjh__]+>fpUh.Idktq?Z*sG|=f}IAy');
define('AUTH_SALT',        '`poNOh{|uYJ;SqcJ#@EQ|<B9:txmbV>/SBioc2)oYIxcVxMS${Ounz9v8U;`M<9p');
define('SECURE_AUTH_SALT', '@71hsV|kgk^~WcdMQv||:m}a)74!.w3&t +%4{1 O7QGHMnSV_8BPQKrJeRCA]Gk');
define('LOGGED_IN_SALT',   'ZY|m?-c$[|,&]Zwu>G0n@h.)k)$P;nnW{g08-s)Rs%))0oGf5TeU_t~RGL#/.kjj');
define('NONCE_SALT',       'i?`ce%m& .gTdvu9!5S,2K~NJx{2(.+w1*^n^wICB3{QfnOZ;VV~5PuN;kAWVb7Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lttd_';

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
