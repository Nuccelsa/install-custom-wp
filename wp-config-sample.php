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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_CONTENT_URL', 'http://localhost/urlDuProjet/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );

// Déclaration de la langue
define( 'WP_LANG_DIR', WP_CONTENT_DIR . '/languages' );

// on vide la corbeille bdd tous les 15 j
define( 'EMPTY_TRASH_DAYS', 15 );


// constante débug à modifier en fonction de l'évolution du projet
define('WP_DEBUG', true);

  // activation du debug
 if (WP_DEBUG) {
    // télécharger des thèmes librement
    define( 'FS_METHOD', 'direct');
    // Ajout du fichier de debug.log qui garde les erreurs
    define('WP_DEBUG_LOG', true);
    // Affichage des erreurs à l'écran
    define('WP_DEBUG_DISPLAY', true);
    // pas de désactivation de l'installation de plugins
    define('DISALLOW_FILE_MODS', false);
    // Désactivation des révisions en débug
    define( 'WP_POST_REVISIONS', false );
    // Désactivation du cache
    define('WP_CACHE', false);

 // pas de debut => on est en prod
} else {
    // pas d'affichage des erreurs à l'écran
    define('WP_DEBUG_DISPLAY', false);
    // Désactivation l'installation de plugins
    define('DISALLOW_FILE_MODS', true);
    // Activation des révisions pour un maximum de 5
    define('WP_POST_REVISIONS', 5 );
    // Activation du cache
    define('WP_CACHE', true);
    // effacer l'éditeur de code de l'interface
    define( 'DISALLOW_FILE_EDIT', true );
  }

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
