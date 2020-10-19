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

if(strstr($_SERVER['SERVER_NAME'], 'localhost')){ 
	/** The name of the database for WordPress */
define( 'DB_NAME', 'turkish_to_go_tauranga' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
} 
else{ 
	define( 'DB_NAME', 'dbykvz2yhw2kjp' );
	define( 'DB_USER', 'utv7mtphmvu7y' );
	define( 'DB_PASSWORD', '^@*%{2@22bk2' );
	define( 'DB_HOST', 'localhost' );
}


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
define( 'AUTH_KEY',         '96Gqu$m8zQ>9X/F&BpQm=.44{5:d9QNZQ|QIBO!Re{G+3NZ4W}GKDAQd*Wbo6UO3' );
define( 'SECURE_AUTH_KEY',  'Cv9<x0>A4v{}zT+>;~}H|,2Gi5K.E$Wp-.*wGz0,7EP2:LB.+ME;&p{9JAsO+#]1' );
define( 'LOGGED_IN_KEY',    'zrYeLsx`c;1_~W/IK0!2)>H;%1b}BP^e=l.Ax$kLiI0,zn<NnK@mS3Hy2(aq7I?>' );
define( 'NONCE_KEY',        'hu+;AGIh*qA*)k(D_/K/`9*/u;^%@uAO|zJ034XoY]RJ0c#aUW7Gq@#*Q?B~r9Oz' );
define( 'AUTH_SALT',        'JGE~_#Ut_^h++|_c=:CtP&bk~Q8{uzh-;,8y}Ku1xZ{}aK4A2n ]EF=xP&t9@*>|' );
define( 'SECURE_AUTH_SALT', 'R4P:pGB!}PVF#`Z$;%e?0HE9E?J>0 R<?G(=CEW0amv^DF&)KIamk/#S5vCg3n%d' );
define( 'LOGGED_IN_SALT',   '1mxDS6hciA0/Bffl7>Wp/Kpd/4{3@|f37~63vWcUU%xzSP#t]H$>CvWa;HPtPe,/' );
define( 'NONCE_SALT',       'Z6&?2Om h1_JCATkp/R5Q45Cc|~GIwo#y3N=O=vT&*[VBn1DO;,jVdp&S9I*qK|q' );

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
