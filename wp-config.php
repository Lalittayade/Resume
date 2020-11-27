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
define( 'DB_NAME', 'Resume' );

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
define( 'AUTH_KEY',         'afUI5@OE/iOrP/}r.Om6[P}V&0_$;.QVG2R]g/<$1,:?n5.l>/N,8dse1ZtI$Oi+' );
define( 'SECURE_AUTH_KEY',  '.,+l>S?]2w&Js17Bq2s@^s/e?QY<8g[,Pg2t1xpTd-r8b8OHeZSszPnhe2~/TSw*' );
define( 'LOGGED_IN_KEY',    'S%rg3=;B5qa~Wy|ko_,?1v!T+(9Zz~D3&0z MOs-A>0>enfJn?-ID(3.plS&X>eH' );
define( 'NONCE_KEY',        '7zpg^:u,:KT6pS/b kQ]solRbj,Uf/HHh7xVn@CFQ!TB*t6]/&1F[t$OY*!O-D!L' );
define( 'AUTH_SALT',        ';6 !/Mrd4vy1JAk(_6R0g=?YM35VTYQ)~)?d1k&9O!Pt.j[o-Z<yb:+?xg:ObKv{' );
define( 'SECURE_AUTH_SALT', 'c<voD{uU3)#M8j9||5{K6| 7SKM)kZxkN1(p].yQpB:Qoy0Y6d{ovP(T{q98AKmw' );
define( 'LOGGED_IN_SALT',   '[G*$P22>i3J7~H_Id!SKRES/TbjYv@MR0!`NCe.2GR>-r!|{47tJBmVtz$CGW,i,' );
define( 'NONCE_SALT',       ';1.,2b92jRa```o0..Ub8IH4R9ggy`1;}FNe}V>haHrDenm80QY%UMKD]Hy.dG1b' );

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
