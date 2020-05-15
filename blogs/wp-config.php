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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j;~XF1.[*.Q=dy/J!+~ceDbI=lCdZe45wcuJYf3Hq]cAyD[MrkWrPFKc+`$IYi_;' );
define( 'SECURE_AUTH_KEY',  'u:!OJGP)|qC_Hc]H6;l/6IOO+iyL?;jg|D kyyF|;uf=Rf7w0XbZ@CASy.@Aou4e' );
define( 'LOGGED_IN_KEY',    'r{C;OlqR+ZinzqYv|[/QhRb&@N-R7R%B*O^%~>Cu;>1_rla6@a5;_bC~}I~k.1T6' );
define( 'NONCE_KEY',        'Nz JvO)^}Jq)!,;z5O_5P$C+ztp35,[OM<!oT6h)Kr3Qj0BA<u;4eAf K6&wO=H]' );
define( 'AUTH_SALT',        ',b7+5XQhisd(5&Kz|>:&>~[8gKTQgGbtc:_J4 6};FxP7IoQvB-;1w+iae`.`B6z' );
define( 'SECURE_AUTH_SALT', ')4[@TQV#+`S9$.y2}H<BNY{lCA#xrFbjh@,MM$tcV8-Vr7<@-e-{R8g4/*_P18xj' );
define( 'LOGGED_IN_SALT',   '!*,IN+9p,Mq){{E{U4n}%?ZB`5/kLuwL@@Ln5xS5|:yk*]ToTwfP(=VQxwA-6yug' );
define( 'NONCE_SALT',       '6`5meOWr9fP- mCqsN0vk]JgcKm*{=.2~c.l,~o8$^uI%XU8X``0YK@3~1Zg<txn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
