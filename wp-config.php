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

//** Tillader mig at hente wordpress-plugins og themes ned på local host **//

define("FS_METHOD","direct");
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcare' );

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
define( 'AUTH_KEY',         'hRWLUkORv7_#BM2DFIHpL6<Of$]:ISP`P;Ix)`i(}IeCy:mp*T0hlExw&fqj[hX%' );
define( 'SECURE_AUTH_KEY',  '&y|MNz.+~uDi)XNJQ;gVaZ)F:hZB/IXJ<>ePQys(}zew a@[EtZ:]z9H!(:uCzk6' );
define( 'LOGGED_IN_KEY',    '+L);1x6C|-HqdexYY=_d#^*>oPCN ,SeIDO^1GuepCLyB=1xHq$+VGqHl)6n8}qh' );
define( 'NONCE_KEY',        '{c00V(;|v!x`;hgUS-;VU.CGN`!QC~6)uSsyo}iMstV]`^%?cDRvd88 O4%gx}+/' );
define( 'AUTH_SALT',        '7feZp6xsoBz-Q#&q|XPZf]GN- aO`)BV&s]p:&0Xm-%{rL|^oi^}pxxIn=SxTt>S' );
define( 'SECURE_AUTH_SALT', '40!-x9lEaN],ipr<73jRG+JsQmOdN$X]qWc8d%$@CB/DqurF=Y_8r>5:&,>r|<{P' );
define( 'LOGGED_IN_SALT',   '1.[Qk5]g@gH8|8uqpdK%T]-2)80YU{Ce?@d#QHf;h><p({Bky&0O7j4Iz7&RtTzg' );
define( 'NONCE_SALT',       'B5=g=|7U-d%h10=6[2?3K*}ms3Gh%FeHESi#C&Pkfd_K_yo>2+3c0A~ts<*Y W$@' );

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
