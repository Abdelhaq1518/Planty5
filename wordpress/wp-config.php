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
define( 'DB_NAME', 'Planty5' );

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
define( 'AUTH_KEY',         '<lVBU~}z;a4>?czyL>ZO3:_RN@B1~^fR}01V#q+U >fvU43Qq&7b6m#@3*p(+hbe' );
define( 'SECURE_AUTH_KEY',  ',7yyD;Yj044f3oBqZ,,y~NesQv L6!|nx2)dt c|$<.-KVq00ZN6^!K(|Hr_[C<3' );
define( 'LOGGED_IN_KEY',    'MrhJnh;v~)6{s@W!WP]{WU*5:H+pAny.cA I|)y,g8}PYan)m*#u#fw)}[+,BmHx' );
define( 'NONCE_KEY',        '~1nf$G8Y9?^..+Fvm0?$Y5]&2Ges &kA-d-;% Q]qOd$lc1!_|Q[&Q^M!LgWn8 }' );
define( 'AUTH_SALT',        'l-.+b_nJ56K,I?uKKj!cGq*@u8dZgveUX-jRcv=`oyRV[61_Wq(vb2+TbBS|]u1~' );
define( 'SECURE_AUTH_SALT', 'NZ<9O?(o;UBF%ca4;$M5}Kxa `|;O#v~u{kXxM<P@(U5_#-,_j{i:{ Q8TmugA1#' );
define( 'LOGGED_IN_SALT',   '}&_v|c?Ge@]Y>q+s}&ur`dZN7NOG`TCiBh*Gm}R5/ooq1u?2ag:R|_A2e@itUQ>)' );
define( 'NONCE_SALT',       'h{Clh !rJgBn!<nu(r<Y?ye$%>jDR{h[%/XE6y*J(#WV0xzjzE :`?M/vrY`*^?Q' );
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
