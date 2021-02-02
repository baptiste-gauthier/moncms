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
define( 'DB_NAME', 'test-wordpress' );

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
define( 'AUTH_KEY',         '?d7&`0}u)BA?9N+nReG:1Gbka^9l1TfG8:zG~NhSbM#VpDitc[_>A|s8j$[0jzm:' );
define( 'SECURE_AUTH_KEY',  'NCc<ZhPMCC>HxjbU4U&N`TBjbEezL);cv~!:C+g,!A:H;dKlR(B1Kv|7JGnStpRr' );
define( 'LOGGED_IN_KEY',    'CcwI$j_KwRI0&kH_=6;(c?)n|czym6[Y(7r,|wvIG*V,u<fbv4aMo-VJA&QCT}iN' );
define( 'NONCE_KEY',        'E%+1I}&GD{ZXODT=u^=g~ZUj}Xn_DMlwt~oV0coJTr5P;[G/HN3%}N_.{D6}!c8e' );
define( 'AUTH_SALT',        '7C|sY>2ZKBFR<JG0oQ~_qM74Y <Pj!3WeAT?&3QmY4~(Z]lTkhNA.zEn.[w6qp?V' );
define( 'SECURE_AUTH_SALT', '0Qxno,a`:Y-3xK=Gznf!#Y/7BH7IeK+KvR&-|[W<u{%A_|%/4:em=]#yw.W6304?' );
define( 'LOGGED_IN_SALT',   'uXo4q63ls>~]WYvG9Q=z+YtWlU |qw}Goq^+tU+WnHh/Y@RD}B1K/{e~TpPwhX>9' );
define( 'NONCE_SALT',       'kj>Thtq}D&f1u-Mm}LP5#3&}_WD#eVF ul>VdX{bam|V8Hn)T `qmQTx{JgVx[du' );
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
