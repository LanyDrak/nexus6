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
define('DB_NAME', 'nexus-6');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'drakroot');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '1A}l?Rr^djcJ{[#XqVu!-9Lo-E8Df)CPVqarvpSw_.CV[-f;O4+0c;s1]hK~9LX?');
define('SECURE_AUTH_KEY',  '^V/=rD]*xUzt(C%m/De[#.^tGtt7C$Bg6w,<wi0Un88[(:8!uw$} evrmcKh8X&2');
define('LOGGED_IN_KEY',    'ma)qXW?l8BM*$N G[ZoBrZdt:F~+xJW+(itjt{jK^*Xp^h(M/<EbaU&6ce%SeQA-');
define('NONCE_KEY',        'jd{,)B`TExXWnG~NA+Fb}ShQ_(IU)nA(;i~tLf1a/(?j2lR|UvS68cAefq/cT$,-');
define('AUTH_SALT',        'e7Nr=.?X2FrJ%!Z!`[TuR38kG(p:j7*_fCIT*A}-j0P$6s=2(%ne.<lf%6 7J+af');
define('SECURE_AUTH_SALT', '#q+lvnnE>~f|b1+WJumo?V-=7c4?&&i!tqv!k|D-/u,DjWn+>ap&~6g/ik[lo2Y>');
define('LOGGED_IN_SALT',   '757;pcBBb[)@F<Y^:M4iK|MP}Lx5<=eDl2Z/:xIH<VV|3P[t9;!5`3/#He qKJ8<');
define('NONCE_SALT',       'O.BI(-C.pbdO&YUxIq@ 3]2jK!2F^yTA=$a]<yxwrS $Uj;4mg70*&NCwMbHvxTr');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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