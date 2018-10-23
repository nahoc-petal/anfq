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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'j8:4jaf6YDvd&L),Tk4hcX{<B=GJY~f <FNMMBcI3VV}N!cy,xJNwcZ9R412R]y,' );
define( 'SECURE_AUTH_KEY',   'vqN;x#N5c{/Fz%@WWp[TH#@x[U@`~j?MFVy*X;<{$cQG)/n`zFwjmvEl4A>` /)q' );
define( 'LOGGED_IN_KEY',     '{tLE7zt#X)mt:c]VRX@L_js#_)<YV9p$91@u4_?}tT67=)f6y:<T9:yu2z/.`A?$' );
define( 'NONCE_KEY',         '&^Z0eUfKzts*GPhP>yWjjxQYykG=_*022Iv!MRVC_L#n|p%B0g[G~T;Nn=&BT1I[' );
define( 'AUTH_SALT',         'bjT,Ti@NoD~E*a#|y1uL~tl:3R3e;#b+><Mc2!=|$UUu.tv/i{acVeYyFK*1o3XH' );
define( 'SECURE_AUTH_SALT',  ':sub*s>&,~9JcWpGGAGGu6hZH21R#22~jF]7nWAt!z@n|zzFfu9*gL0Ks09;on,b' );
define( 'LOGGED_IN_SALT',    'Z0Mk!N9HXT]1vVBn^E=g jY7xFt&5=d!x2>&s1u9/g[REx,vH)A_K=Im$Kgi4;82' );
define( 'NONCE_SALT',        'm?xN@t0hNJB#oc}0~6RNKr0QArh|w@fsGY76^`v4dkE,eMHHM55V+{*U`XWG,+?x' );
define( 'WP_CACHE_KEY_SALT', 'i_^1ktPiLP)M.RpS6(&B3OEe${XHmnW!.9HjFrR8?=C6r?Kch[&5p5x+SJ-0o{yW' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
