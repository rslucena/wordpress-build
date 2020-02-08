<?php

// AMBIENTE

define('ROOT', 'localhost');
define('PROTOCOL', 'http://');
define('DOMAIN_NAME', ROOT . '');

//URL DEFAULT
define('WP_SITEURL', PROTOCOL . DOMAIN_NAME);
define('WP_HOME', WP_SITEURL );

//SET COOKIE
define('COOKIE_DOMAIN', ROOT );

//LANGUAGES
define ('WPLANG', 'pt_BR');

/* MySQL settings */
define( 'DB_NAME',     'lumemedicinaintegral' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );

/* MySQL database table prefix. */
$table_prefix = 'lume_';

/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'GdC~1EL3kY<D&DYh-jf*Q^H<Ov=5+;Vo}[z;b_.nWp|?,ba&G;}V^hcgbpB9@G)V');
define('SECURE_AUTH_KEY',  'lz)XOG{[[z]F^7m4}R_syViB$|R+mosdct,Ovb8eU|(^):?KDkpK@=(M>+Yp9;@O');
define('LOGGED_IN_KEY',    'eN>Vr[$w&7J;CtjINeBmCX4/Xli=1[|8VhyYJ6#yzGKYEx#P|Q3 ^H_>J&dzDODG');
define('NONCE_KEY',        'j-S20t*5aM+.^#UE0d>3Fi#(m5^X/RFnxFD0I_RTR[9_M8=`u<a7H~eMhZ#90lo3');
define('AUTH_SALT',        'E#Z,Wg7nDi-A0WLq-b{+->a@OIH@AI,WocG|r3]x&N#`/`net8 5!4vu^5)bb)Q7');
define('SECURE_AUTH_SALT', '`/7}bX!n-:mYm-C5C!~LwW]7:=)kE;d=eeryeR$rW}+|bifnYhJ$m?vhpV0U+ ><');
define('LOGGED_IN_SALT',   '`H,Gi~W^no9zRD#pmL3}O`<=o[FQ.%yRI]4j$g]s6}^<3F`{orx@|S1G,O@PdJNd');
define('NONCE_SALT',       'W.-)(h.+lZ?YF+>g|E||$>njSH=]#/t_*vTFjef%,f`KaZ+/wg}l92D{++zP_/!)');

/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '3' );

/* Define auto save interval for 5m */
define( 'AUTOSAVE_INTERVAL', 300);

/* Media Trash. */
define( 'MEDIA_TRASH', false );

/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '5' );

/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );

/* WordPress Cache */
define( 'WP_CACHE', false );

/* Debug */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', false );
define( 'SAVEQUERIES', false );

/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* CRON */
define( 'DISABLE_WP_CRON',      true );
define( 'ALTERNATE_WP_CRON',    false );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );

//DATABASE
define('WP_ALLOW_REPAIR', true);

// SSL
if (PROTOCOL === 'https://'){
	define( 'FORCE_SSL_LOGIN', true );
	define( 'FORCE_SSL_ADMIN', true );
}

// Remove POST for email
define('WP_MAIL_INTERVAL', 0);

//Define theme default
define('WP_DEFAULT_THEME', 'sage');

// Rename wp-content folder
define( 'WP_CONTENT_URL', WP_SITEURL.'/app');
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/app' );

// Moving the uploads directory
define( 'UPLOADS', '/app/uploads' );

// rename plugins folder
define( 'WP_PLUGIN_URL', WP_CONTENT_URL.'/framework');
define( 'PLUGINDIR', WP_CONTENT_DIR . '/framework' );
define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR  . '/framework' );

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');