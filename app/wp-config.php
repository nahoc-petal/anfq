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
define( 'AUTH_KEY',          'Xj&Gc7mGTPD|Z[!,N|xi>C!#anm|.z?]P#MA!Wc!,)`1(m-#~h>`BB2mafR;~gHl' );
define( 'SECURE_AUTH_KEY',   '*XrIL/_sx:U3.vfr|hQx_xKpcy*68D~;  +8a>aHXr_-~P>_W)FKkEe|c.r3VV*A' );
define( 'LOGGED_IN_KEY',     ',G@,ot.ez0?~ol!8ctf<Wqnn^D8Xc7 V8<8K/H141X4OC@rxZWn9BmT`ja}^tW79' );
define( 'NONCE_KEY',         ' j[LLXEVHwLUS!$fg_&B8b%o*eD.7`B_i;]lpHCr9MPD3=811i]SH7$w32eEM!DV' );
define( 'AUTH_SALT',         'clWxdn[r:57.Tm-XV#yXU6_ft1pJIS|>R f@+X,*Sd|9wo?M.Eb%#z3%W{NR-E[3' );
define( 'SECURE_AUTH_SALT',  'Y_ouHAwCK@cVQ{=PA)%T}H|kI?oZMRj@%-`; oPrt/L`6cv&4FGukS O87[&PJBF' );
define( 'LOGGED_IN_SALT',    '#8z+.o/>kHQz:yjU#V.4;g>SgZd2U~YZ,HtHQ=A@d+o2hOF{h?Y*;YY=VQQ9inyq' );
define( 'NONCE_SALT',        'JPm2,5,Klg|$hq(ZI3U!8]=p+(d!|7gUQk?Hl2aHn+:n?g/bS1l5vvpAOKCHg S,' );
define( 'WP_CACHE_KEY_SALT', ']p#H&vDX{WB#2(nY_S`j/buE(%$Cq=+CE8r~=Qv>-s:.Y;/b!azW.lN2lf:#i(cj' );

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
