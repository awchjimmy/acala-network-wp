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
define( 'DB_NAME', 'l0t354brck63nhi5' );

/** MySQL database username */
define( 'DB_USER', 'rrcz26fvxed8ww9r' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c6xt010qhyw9wi81' );

/** MySQL hostname */
define( 'DB_HOST', 'phtfaw4p6a970uc0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'h#t?2TQXra73s{c7$&(15R0hkVtFHT1=.C31G|M<*[P8K 4)&`,+PVN*5P!%Q@ul' );
define( 'SECURE_AUTH_KEY',  'O;&C(7N,h/4`4#[o6L:r#]OEkYXd-1o8.o<U>4R/5GH-U|H6B&?ptE:;u;XwZm8-' );
define( 'LOGGED_IN_KEY',    'J>0!^&6Hsu:[>LlPrcl|:{iaC1ya@O*TG)IPYyN,ngcM.Rv#&x[MUHTNa:z>~7^b' );
define( 'NONCE_KEY',        'LTRVY)Y|6)p98:c+Pko-hc7ge.2Y(Cs/8Vnx^5sQ:<Mq>4zOe/4%e=`$X2VYY7DC' );
define( 'AUTH_SALT',        'Ke=<uZ~:DTu_AenCKi5r61:Zc>N18.X>N8D:T#8-& 6fQ)3x:M%1=f?QM;BZ HEe' );
define( 'SECURE_AUTH_SALT', 'SA)4beWJ4;LHEEitM_I=(E=$m9-Wy5.6??i[m8 ($j8&k~HF!Smm$?TG23} +,zm' );
define( 'LOGGED_IN_SALT',   'DyD`18MT18vJ_,#t7$1KugeX#d@4c*,I5nzBD-0QQjo*oMYM2CrU6q._1a_jk<j7' );
define( 'NONCE_SALT',       'G%md]e?w0,W.E_tP>8|qmZEle1=2Wi)lR*&f_]&AwDq/8tGqBd JP:Tv7<O,?Esn' );

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
