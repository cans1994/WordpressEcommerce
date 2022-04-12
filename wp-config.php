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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'NE|cP)ZExllb-6nv=_mc4()rtVt)wAd<m:p/=k3#;7qt #Bg$wfaLuiQ4OlnxnjP' );
define( 'SECURE_AUTH_KEY',  '=P+bm#tB>wSCwEhmV6aO`E/kO;CNP%G,K[.|YjbgTD^HlrBR>T}r6p3y}vHDJ5BR' );
define( 'LOGGED_IN_KEY',    'ge]9.H_,VG8/Z,35h){rMz~r)zV-UhEaai&h>?k:BPN@$(D^N6/=h3={j`>ww8Ke' );
define( 'NONCE_KEY',        'P %.?`o/Q!cx6[KjZgHC-CP!oF_7h_h7#@>%_G?o)p.sv`Ov<tScVrLcery[yJlK' );
define( 'AUTH_SALT',        'Eg$Q>f>?c|W+iIQ,A(L<Al?|sBsXg#F5R.|%@Kjg%qvayq@NSH@dz[+P/sHISBTB' );
define( 'SECURE_AUTH_SALT', 'EI:B)@(H72;4*]x9bO(s}>2R?K)$4?zPV8Gm^I<s;W(ZSaNH[9>R&Z[@YE<wZH]X' );
define( 'LOGGED_IN_SALT',   'Yo.{W7U>=&JOxsd$R :*Zq9+Xmf1[}]o?L4!oGMCyBCB?GT+}9b{{Ua#45~?%b@S' );
define( 'NONCE_SALT',       'mU7q@v6axhm{sas5L?9nsX9bp2s2[``n+D< {v^un%|yclxG:)|3Ia|wP}4JhtY[' );
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
