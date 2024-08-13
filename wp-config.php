<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myhealth' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1}+^sbtYId`vxb-.zAGnRxG zwSJ~tx~+SDd/hVk:S<WF{4d@0|^%5X=)@Lg[NIP' );
define( 'SECURE_AUTH_KEY',  'd28cHf#<W5ZAS9fFyZ>7(Y=`O5,=,Ya8[YGf]HxTJiBTeHWaJatm,s+X^7|HtT$6' );
define( 'LOGGED_IN_KEY',    '*` 8thg~^P>90F_9 1mx+9(XDlL_Q+/91Tz~u((|qzE2dCUzBDf2|02ClXR$Wxgs' );
define( 'NONCE_KEY',        'nJnQtS2T#Z|XY`BQSA<z29l0F*AB~I[9h} k:>UuLSLf:QYBXpn.(E_QKM61*T i' );
define( 'AUTH_SALT',        'sk(wh$%1Hbfn8>G4jh;mP73Ht:Y%cFF_%l.:U!v2j}uC_M[GZjs]Ri[}WFx3TLjF' );
define( 'SECURE_AUTH_SALT', 'sEy?-R]&`]uD|Xw^3,$ jX2$i84v%-d|d6wc7sq-SkdCrR*F>Hiz6$3uMkY*>G/~' );
define( 'LOGGED_IN_SALT',   'd(R6t r!$! 0{>*!D[6_+W#3OhHu4d xNEm9+ }nI<XNvn/fUzPGT^_`{f=<h1ET' );
define( 'NONCE_SALT',       '?cf-KJF!IwDvF]J]NgjC(J.)X,1IJ/1nw3oDXEV#Q@M5 Bz60]K1:<6Kp=$@UD!`' );


/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
