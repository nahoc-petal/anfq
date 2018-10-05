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
define( 'AUTH_KEY',          ',&]1UG K:+j*{N|h,*q-;xK4}aMnYLDd8Bt0p!:_>eV//LE`up@YKg7dnq67(_`h' );
define( 'SECURE_AUTH_KEY',   '(!Z}qHa.tZ!,SZ4CB^n95K~[Qm5Iuu@5H/TBOAZT~qk4d!X#n0m`~Fq|@Ht-,* R' );
define( 'LOGGED_IN_KEY',     '?%RV|H~23NIsQFk_:Q)r6XS}{cq{l8GmS=;d<6Ar]d!n`oWXC|9}PRbb:sKTu_qZ' );
define( 'NONCE_KEY',         'J(W(u^0JG?+ ]r~P:::ShI$&Z57 bT*/ml^sZ@<VG0(4w7d%_4vt,IAhw[#(GO&B' );
define( 'AUTH_SALT',         'fVbJv@dsadJX<uh/FH#lvpt?_[ *Lx<%S[?,m%OxLD}`#gnH?#3;p@30-?48E,qZ' );
define( 'SECURE_AUTH_SALT',  '?$8/<y7^ehUK[B`8(0EViHUYtiDYHV>KH)muH6-iyCr^Do.NV~s|Wq!8ur*l_fBb' );
define( 'LOGGED_IN_SALT',    'fre$ryE$i#h^CbKCpVmOM7).#TFzs#,S~RN)?dW/7#bQWf&+}dXU@CHy,k& X.lg' );
define( 'NONCE_SALT',        'mJRm=EHa1o5VOnSC+JH10![Z`-^k_M^fZrkF06=-70QV )]gPp!Q?UckZ.5|S;BT' );
define( 'WP_CACHE_KEY_SALT', '>5]wc6 [8}-9,F6bIHZ{kH9o?:C*mGs6/{<6Y! ysrextW7K};kv:zqNB!+~cdKN' );

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
