<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ed5p-+rM,}#sns_Z7?XFmHb1X5WwkTFJN{SX<yqx<oFti#`q05^.~|-pw%>JnUPG');
define('SECURE_AUTH_KEY',  '`~^]A3IZRmf.,w~*/ecxto6DQG++pEdK6gw1>}-O4XK=40E_U{xsVLh?cSbsQ3*X');
define('LOGGED_IN_KEY',    'fpwV&!b+<t6y9BTfc$&cd(R+hiAI$Fc/eh%kjK:w`q*;e*IS7!d4_}wGYSqsp8M0');
define('NONCE_KEY',        ']gvjrxKp6jwoUL&Y~VMe/6xR;XMp08s~2;KFpH.Rv(M=3-|yoxP#8G%N]zCB)9Pz');
define('AUTH_SALT',        '|SZ}V(ci6 _!r&w=!Ex79i]/dR}%1s V}rz70AeqM1xiCL@e,fhV2otQ[*&FqaR[');
define('SECURE_AUTH_SALT', 'lB>l5^08clIzA!Us!OA@kj*K6sZcAvE>8q5UV;/tEfsFd>WZziPc(!ArFAMHG~/$');
define('LOGGED_IN_SALT',   'SgH<(/[ywzx,H?`Y{X4=%[<Ls)4%CBKU7Zs,pl4Y_9(`kZ=j;|R,M,z6Vw!`8j]}');
define('NONCE_SALT',       'HYp>V#QWxE% oGAMyYg4,RknrQ[4B0OGQRDn_d8WTUN;ap#Fispp e{JmGqq-l0w');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');