<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ocpizza' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8_L/^BP@D+:k?hb-m7hRz;4OC!4R[.2{6y)N11?|2x,-we2jM&P)~NLWT(trd{d6' );
define( 'SECURE_AUTH_KEY',  'lPei!;P_#-s:4T}>g7^k]rCdL,H^pcEA!]-}$|7xwR&8sv{1>Jo%UW_KIV*x#`P6' );
define( 'LOGGED_IN_KEY',    '5`akXq73zc#0sfl*~eu>$0(;q:ohy]oKqB48${?fW7iWggQHl7x~5JKdVMStzGic' );
define( 'NONCE_KEY',        'Q3a.:}|byS&,yt<Y{I=c8?o& Kvg_e^WW{o]R_[hpK,Z2l$1+uf,u(k}S]g7efRs' );
define( 'AUTH_SALT',        '}HGtj7jxNq2zmgmhU &w^*#JX[cmY_)].Y2._o4LAdYux8G!lt!crKF(E-|~4y{Z' );
define( 'SECURE_AUTH_SALT', '$g@~pga~cBv:):HqKg<!/6}gub(>y)J~$mO&EflI=[rs?1Bum-atZlC(ZcL/-{_x' );
define( 'LOGGED_IN_SALT',   '!n;x5A_OQ9nujFeJ}@# +hkUrpeks3)wd$}+Hll*:`x/#JPYi!u`1Kmn5X7d_QO/' );
define( 'NONCE_SALT',       '@hW?:I:ZfdaF|C1O5EC99N_=S^fE<wU,bpe2>K%k>$6]=/vQR3[#f%4EA_8}P-+m' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
