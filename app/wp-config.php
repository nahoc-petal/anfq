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
define( 'AUTH_KEY',          '}lD,Azy]75|AI5wRyogc`]h[>oBpUJJ=5ywoBlaQbqx26bMi@pt@$)X-~#Y(vOEV' );
define( 'SECURE_AUTH_KEY',   ')0;vm$B_u{MwLeDd$<9%bl>KX23J0)ckK01y#e`j$v2ZZ0#PcL{ols6OvYEw7*9x' );
define( 'LOGGED_IN_KEY',     'u!Z-b|?|b`]dfwgN$clV(,G?WjR*&:wvd?cB)n!a<ddcc:m^_`r2q##=a6r39@:*' );
define( 'NONCE_KEY',         'IC*!p#E>bGQTZe4-(B~[#7)ESLv4nf!#S$,ju%3{/f,0(F 4tFq*7$VB2uX![lV+' );
define( 'AUTH_SALT',         ' hFJr7`5Kq9 hs)WW[>(7AO;},Sy<`<Fjl*c;xacn|B6&-i63<{@PF<uH*02+/[t' );
define( 'SECURE_AUTH_SALT',  'f!zxU:0R2V?f8xA=y2<_+n~!{Oyf?m=T(4a39Qeb<9p_I3h>z+*VqFm1K9h[R9~X' );
define( 'LOGGED_IN_SALT',    'BR,T>OT7{i|V#yC7xolg;[D7dG83m9,G;D2V-9t_QAKtT$C1!XknbpH>J=K4^x]3' );
define( 'NONCE_SALT',        '1BkPs=!R7GaeX)6_6#J!_TMh.3UGMVI6(G<?dkL+NDGatC6.t;3NtMD=6JG0kbYm' );
define( 'WP_CACHE_KEY_SALT', 'agTKA:[n4i**o<3@t8Bz/8S=r/#Pg22WsDD}&I4Q*%5r,8rf~IM#ZZe6LuH5GEv/' );

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
