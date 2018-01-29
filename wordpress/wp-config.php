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
define('DB_NAME', 'thuctap');

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
define('AUTH_KEY',         'Om2TAT9q=P=czhYj;;eBZ^`cfE6Qf/y^;VL-F+/B87lG*E/f.7YQO#Gsl@zM^c!8');
define('SECURE_AUTH_KEY',  'D0H;fR{ojk/Z=E,y3A:HVT{%f1Gim&JMwE:ns]HjRly){J`WaVwGzk9-l 5@|yXB');
define('LOGGED_IN_KEY',    'Mq?cNnTt?RL&V2S2vNg_xo6*mpY)$4Q#8`7`@Wj`H1fSnvX?g1<Vdm4/vX9W}Iqn');
define('NONCE_KEY',        '@|B$((!(h3EBx;hr^#S+,cWmAd!w6<cG08oP$CY*f}EWQ:MXvGkm!>W($)*wYr87');
define('AUTH_SALT',        '!C:2:z~)V>W4rosf/[e<r J;swO0*p4vQsU=>PGvn|P3SyjCu?z($9a2#KO(,7k!');
define('SECURE_AUTH_SALT', 'l ,F<HjIeLnEgHHg~r}^dvk|0GN7{^hY:`(NXR}.xT!STFN hvnp?%DV7Z,(-4hV');
define('LOGGED_IN_SALT',   '[MAKVHT:YQn!y0eP3q*LU%wFe$mx1LgVQ:a/-cv2oP`ujH%p8.p0=HpB3|=^kf.3');
define('NONCE_SALT',       'K[rTgbkSNCGs-G=Y|3n~SNd3aVe{,n#__i}&{!S`oa ZcK3q$*Y([[xJ9}o.Y<w1');

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
