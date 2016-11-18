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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'run_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W*yT}SJ.</uFEs.BdEo?.9V oLu[)HTH[Z1*lMAq]D*mz+^xF{ar8a=p]8Y9I?F?');
define('SECURE_AUTH_KEY',  ' 44_0)Bb<oTHPayjkBC1?stdE0,9TE>~Iw9C?@i6j$+]~H0j)>UbGdwpd8Jo)=[2');
define('LOGGED_IN_KEY',    '24MQv;r%0]s<CA0i-8S8`N0+^|PW`!f!7mD*YngC@HJ9y87`2*7=Cd^zqv~0Xmj3');
define('NONCE_KEY',        'wZf)jaSg2#MhV{U>)Y=F,qc(.K?nrn+*qbI<SL44%Bn/tV0/3XNdEto[2VSQCiC.');
define('AUTH_SALT',        '?w^MNxf>h%C**0-/4kcz7U+gQ3KmKws06uFkBk{dn]3{*SX#8^2v<8.zSZ*D%P4S');
define('SECURE_AUTH_SALT', 'yl0#3]aZ<Ilx~P,2el^xKUZK+2/_`Io.CVhBgPsimKaF]x>mfOJWI%MNN(~&K4h)');
define('LOGGED_IN_SALT',   '$bw~SXxk(4r>b|1}up$ mj_^s.|Qudkj>:$A.+e_|,),+xr^dR]<:/0!>8w%>(A%');
define('NONCE_SALT',       'Q1-b0%[f[g?)`~$@zDh?RTLaw(yRn}#!: j)}&zQwny2-KE-Pe$lu9%y(xLxP*H%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
