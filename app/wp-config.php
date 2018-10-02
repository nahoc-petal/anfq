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
define( 'AUTH_KEY',          'C;~Q Px:jw(#[ni/i!rT)vap_Zt_ ucJ0[W{_z{u-oTy~MC)?r`jCrt^6za.RSfs' );
define( 'SECURE_AUTH_KEY',   '.iz!!LmOSG>(s^M&Q,Y:<QMZX-;.Mf}.V&)C8Y,aR]7lATUv0AU`:Bjm0K1;/6Fl' );
define( 'LOGGED_IN_KEY',     '??r:0J=_{jY5RiFqewcU,qTS!2kfY]c)LsG@})$dt@]K+g6:K^+_B&9T3Lfcs,tq' );
define( 'NONCE_KEY',         'Ei>l&_L0B=B2~lhLJ3Vw[0a[rh/:gbpfvi=cpFAK,+Yq#tNfnE]$$SkM%rfLt#nl' );
define( 'AUTH_SALT',         'M(*uEII@_.nrXDB*(wAOUK~tx5}ACaR3PD]nX[>jF}*O.K#2Ow8luB$_Ql#/SF!w' );
define( 'SECURE_AUTH_SALT',  'KsUIh=-<r}ZLdx<o.>#fM_JQTTxmhmxIyD3FF!Yaq!(27P_n;Kne$w>f#L3{r?<L' );
define( 'LOGGED_IN_SALT',    '~F@V:qk)79$9Cr%1`ddi(<?w6?_A9QjK63+V;UaF*R,aj.M/f:zb7iK@RuKjJWz]' );
define( 'NONCE_SALT',        '3HE7_q[h+e1[03oJ:|4fVr<MC<Ay4&;(M1]Vuf`Kr|uhq-E%<ksRY)bW?K;P[)wS' );
define( 'WP_CACHE_KEY_SALT', 'R*9ejaAwTZ,Cc=y$Ur7Jh+}@~ F+l_!}J0,iy/B@i9BKNo[>1ne^Q>ko1qu()h+A' );

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
