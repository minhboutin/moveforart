<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'moveforart' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'HnSd>0&E*oYgw>S]yNd%5;m4zN>gxU 161`2oerr]X&p@<X; 8:&BYrIgj4 ifDz' );
define( 'SECURE_AUTH_KEY',  'qW5{bavTh*`YVR.KOxqXc-Qv[@`Z9)hn~w!nx,Jc8fgY:o/.PJXWL_}Dh,MDtlm)' );
define( 'LOGGED_IN_KEY',    'FmjR~KF[*s@vEu1 4b1GZl)Wo[0hi9>Jw^!oyO}A:jRyEi/`hIJ7^{5n3!CRgtL,' );
define( 'NONCE_KEY',        'sdNR$Bhqu.>SMmz&o+~1bw5dhD|+.v@hT<w1KfN8S)O&n!8ak&|yS()hw[zMLod4' );
define( 'AUTH_SALT',        '6 1dHL3zO(5T3$WLG;t;m#RYv:qdldyX-6RqD/8,Y*IS[YbCe-Fkn3-h/fKw~ >#' );
define( 'SECURE_AUTH_SALT', 'b$1~vG,|Onr!}TU5[?R:L[ym+[4ON:$`w }PDt]7KV1ySd0?HK?z`}Nf6*G+|r1w' );
define( 'LOGGED_IN_SALT',   '}>3h1STu}xnrsp_G@oS?4-`k*R D DC2B]0quA21ZGc-ZI0lgiYax;~s7nlR(b0=' );
define( 'NONCE_SALT',       'Bt{>On]s$o-mEjKH$A<|c;n{^fo~h=C@c_=Z7eM*fs%=|.{76tJ`,*sP0.?t_Yu3' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
