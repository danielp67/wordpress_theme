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
define( 'DB_NAME', 'wp_theme_db' );

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
define( 'AUTH_KEY',         '&$k0U4IyXjDq~:Y.$C:14$BxueFvTu1=cP8Nj.?+_(;)PUJBP.wT$^?vJKFr!;@_' );
define( 'SECURE_AUTH_KEY',  'O$(Bz8hC1&5XJ$Hp:G%sDKfrU_[cQdp:$vHQ.mz,IS;;I@l2d-^xJdCZ0HNTA@X0' );
define( 'LOGGED_IN_KEY',    '-9O>]G#7`h:AC62XM;-(^(hHI$lpm$8qXXg;JrmsE>Fx@NMMvZyYr|3UWd`[rS6G' );
define( 'NONCE_KEY',        'x#1jj8o(vi/!8v81,9.rE7,pEP1+B_rOo6Qpv%@jbb`Q>%hpQEp3-6Ang*ObjX[|' );
define( 'AUTH_SALT',        '?>1v}^UE;Cn4xx,Pk)a|4]udFYzFLMo$il0O`CLQ8+^4rHu2}pFDEa$=M;zH] Zh' );
define( 'SECURE_AUTH_SALT', ')_DDbDy{[^pEz(;4GDgQaC|0RQ6D02y$koU|K-wRv*x]s7v=LQh$+df>$IrB>r;V' );
define( 'LOGGED_IN_SALT',   'I;}&Ge*cS5Y5VTVYQ1B^IsUXr}b0YK3E&I6T_p_l2Fxt_PHv<:9J.jIB=K`s%2x&' );
define( 'NONCE_SALT',       '>[.Z&D8R1+U-b_xo]%{C !ZAm{u`0.=LAlrwb=R&qCAA~iMb>&Xss1@@o|(5k5nS' );
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
