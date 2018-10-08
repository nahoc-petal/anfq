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
define( 'AUTH_KEY',          'r6yhYlOQ7NI`gv[d0--r}/R:1u@X]94?|Z%3& uEkWjo@LhjV1zsXYAucv89S,I?' );
define( 'SECURE_AUTH_KEY',   'Z[Co iXI+vH:6RfM4dup|KgcRfC3=+(oU.Qil(qw?^p83r>wQn2xu=|utJj5P</}' );
define( 'LOGGED_IN_KEY',     '7GSVq$<A7n%&zX2=*39kj|B)u$<7ChYgN!6ptSf%96#kyuNN#V@T?OCk?0$fZR?h' );
define( 'NONCE_KEY',         'iPJGG|K_wTLH+4z6 .pQeLiG0_!K:i}CoSAui!fHo^{4e0-QZSbYmr`Mzk$%skoB' );
define( 'AUTH_SALT',         '>&S>^4Z4%EYZa:t1e1/4>v`;tph_n*9HR2I;:rcg7&o!N]R0x%6dUgbg$1Bj|1Tl' );
define( 'SECURE_AUTH_SALT',  'K56A$XOF.JjfLY+FI yY+Qp <rY.m:T#mor ,8E}jD/LSDq$9!pOT*S@>!LbNn{)' );
define( 'LOGGED_IN_SALT',    ';QeOU9m,8(O4J/EAHJ?RW3XWrTfH$X[(7$T;lLM,MT%BXY}{h6elY!!c(LdQ!Ag?' );
define( 'NONCE_SALT',        'Jo,/%sW#_PlT^wS3xnO5g_@l%fH~+t:G$_tKHj`Dke+qkLY!=3;Ea}y^$p;nEDiv' );
define( 'WP_CACHE_KEY_SALT', 'o]t%}mt!8dB+6/esp0yarVIF7#3HT.hiHgt@>/|t5063@S^m|n[l((>21=n;{wv[' );

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
