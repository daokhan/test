<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dao' );

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
define( 'AUTH_KEY',         '$_53wM3`je!AK/~qWT~ovL2g0bbTimyo+32VMJ6JG7XL}}ma#,F>P=ad zi}<v(k' );
define( 'SECURE_AUTH_KEY',  ' 7ZEKuJB(NK1`pA`~<yF7?BN%iS_75,$_sC,^ ,q)IJ+`B!eQLbABTVG1q5Nn{-(' );
define( 'LOGGED_IN_KEY',    '(@Ps@tJX )DaqTG@C2ctsF^q`BE|9eg*+9@&=e:+v7;&#6~K$C;xT@l(h#YP$|&X' );
define( 'NONCE_KEY',        'm45a{|,4]5Q!U7CVvH,u({*>pv(ppDpo[7oe;KFHA6rUse/S)2z9r ln{r/!Bcv!' );
define( 'AUTH_SALT',        '^m(X0X)vh#Ug:LD@iZAGED;~3z 5 ^LQo%u!XCwy@d&wb*&x7v*Q2#KklC^#w|xO' );
define( 'SECURE_AUTH_SALT', 'TDWwI8(&KPHr7y*wF<35OvID#VegNDAD~MUvEi,(-N5#>@UY^yL@$JKKPJ^T!vQ7' );
define( 'LOGGED_IN_SALT',   '/P3PCZht7?pPM)Fb[O>W+`D7saf0VwPR$NT)DE)yAH%Cm1/$lcYWY&:!T6MCN!%r' );
define( 'NONCE_SALT',       '0;TN>wI<55$3;.=Yms36H#rT+Es]XZGEIdprvP_*1vDiYY-C2Voaq93wEdrbreF2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
