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
define( 'DB_NAME', 'wsq' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'le$)9BBE]O{%G@o+W|^mN;@ICciCx>!:*boL!xWF,RjLK8*5B;KKS2O#0SodO.R%' );
define( 'SECURE_AUTH_KEY',  't8=.cI3jgYGaD+DBp/6>hmfNoJ~N wyoW6G?3wXw;zC5#5pZC*<9;]AN|n/*s<dX' );
define( 'LOGGED_IN_KEY',    '?U(7FVJ<?Ae}uK9ns;X.eC*S`{_DhMnm9|cJRt2ccUm,U4WIfYK*%%6xhJEe(<pN' );
define( 'NONCE_KEY',        '$20QkB#;tk16cA@/cpI*Ur6yc+a?Z<@`K$I^e:U-Fgn=;pY5LkS+#R}gB<S;8%`Z' );
define( 'AUTH_SALT',        'BISR]yD.cy1ElV2w*[ehR+F8DsR/Hrv<?*qNt:l$&j~I:JtqeXXf{H8V=v#@xQi)' );
define( 'SECURE_AUTH_SALT', 'ng&!CWwut_~49immh4P_o&TizW%kTnw(0jN?paD.p|UkV$G45W:g@PbYrh@eg+Ng' );
define( 'LOGGED_IN_SALT',   'LRSOdqq6N7/<a9K>J5[N&V.dDM,;Zco1ip;ZFhIY W}o3H]JU-oz[Au$*scVgBEn' );
define( 'NONCE_SALT',       'h.H=ofl![w;*%_eW_jRIr3z6o#4ii)gH}/U?o;4@Dwo0{-L*]~H.`~yO13%C`N M' );

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
