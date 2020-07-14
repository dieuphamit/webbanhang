<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         'RlOPMIJy#{M.<[Zhe6JKL,;T[8=,=6DUIGXYutnrZT`0.( n;M]^$3p&nJ 0m&x3' );
define( 'SECURE_AUTH_KEY',  '2+?xySw.GaxhS]~4bKw5o#v?<qDh`wk*@w_]Ht7`7n!#Em-.Q)y:27W{=Q~5d^*s' );
define( 'LOGGED_IN_KEY',    '6b7]BtUs8ZUG<VQ @E~w xjOqFA}$r(xeH rW$s_BLLz7-@7]9Cbnk!So}c.&v4H' );
define( 'NONCE_KEY',        'Qj4TT;L,I4$n=Ei/e+/`>fW0nG@@ P$+^0c$c^f6ThD0~M?15xdN1F}~3L[-$Do&' );
define( 'AUTH_SALT',        '*ix,Bh<~m}a_1$d0wBg?R<??X|r,{oIxRN=@%I(XM;fy<(:T>AqcU^42*(iRW4{9' );
define( 'SECURE_AUTH_SALT', 'p[_b-ymDgkt^JF 3W1|tqTh&+2|LDU=Qu+<1Ek/w5#P5!R 9<R<y~Yf`q*CEn)lW' );
define( 'LOGGED_IN_SALT',   ',9[{]M p!.zgWkGUz`{j.kgOVriByB1];V =U>S! ]BU[+|1R}KZtdv&R)#@Uxr7' );
define( 'NONCE_SALT',       'f.w+YLI]ylyIT4# @B[+qiwVD{Kp5]2NL~qg!v(ywOmp*0CUN_6/simKI=;!vd6`' );

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
