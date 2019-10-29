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
define( 'DB_NAME', 'brocedesigns' );

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
define( 'AUTH_KEY',         'B1Uji{n$f18g2mi>e~cuhOG#}R,?1)[b~k!yJw3P0 R}=DaC7G|K<_2h_V3gdGp^' );
define( 'SECURE_AUTH_KEY',  '*BG>AbdR)FXo2?^V{mfeT@kj[q-N`DK[$1$Z^^2g]gMd,GMj{8VZH4lV4hC6*TFT' );
define( 'LOGGED_IN_KEY',    '&CZDI4EtIJ|&X9zr3VbB{RjsfzE7-Q]xhC<nAEQ|2Owh69j9^pW_V)]gaVYi))6>' );
define( 'NONCE_KEY',        'NNYae)mZ.]|0TRPIhuTo@0.[8Y`:P=5Se@_$kBao;wkk,9b?R@{m/2c?*M@S.?:)' );
define( 'AUTH_SALT',        '[8P{lnc]z{MSq>jg.=$OHcwY&=vH7v)r05>JvufJ4|&_8T0Aj1zRM+{+r$13I.p7' );
define( 'SECURE_AUTH_SALT', '9}$>#!xK,&M/gNr*JYc1Hu;{o~=SY.Iz33AussRp96|m{6i9E7D=x2+{BQw;5~H~' );
define( 'LOGGED_IN_SALT',   '2 <kUs.~@9a:&5=V6YbR?*P-ya)*JBIP=DrTO/ji50P`N^[BC_G@EWwG%YkL@<]?' );
define( 'NONCE_SALT',       'o<-CUhfLV2$.BD^RxI-+5llzzK?M[$9t7cQTP4<zYZ*e;ig`@u,PJ ;g.B05PDPm' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
