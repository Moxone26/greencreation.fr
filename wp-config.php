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
define('DB_NAME', 'greencreation');

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
define('AUTH_KEY',         '{[!H19E#IpN@v9%o?SEL*KCJH.*nX_LUB8G7:Qo8kOq:C,V!nv/DURNlgn1Cvf8D');
define('SECURE_AUTH_KEY',  '12,^qee)qpa(!qOwf(~/>t7H}$)BnD_mvxUe>OVlI+3BD1rva&]R~oQ=3!`{|0?_');
define('LOGGED_IN_KEY',    'fd] w>SWvWI6|E-n2hdIcs9T1OJ8falL-o{&P[]5T`N)as[<c!c,/HCH)5j1}g_f');
define('NONCE_KEY',        'Pn@h^2j$Ao~KI,;!xMy3K@/tOvgDMpu^:Q@ `6hiS%|!t4.b-4(*O(WOZzn^?jK[');
define('AUTH_SALT',        '2j$d[ZL{,4><?pj*d{&&bP^_ _*3<]LyA0.0O/Yub$q}^0V7G]/MLq=U!}IC=HL[');
define('SECURE_AUTH_SALT', 'A}hp&f8bFX.UKsA03N{VRmRP[QT&p^nU{xA0tF0_TZqlF3`@{A1goME/vHjd:s=V');
define('LOGGED_IN_SALT',   'Vb+5,Gw6.8%.4`0;~uPe]K>:4>#AsO|~9oe5Tkf` ?|k`_J9vBmo^~.2iJ}e2b$:');
define('NONCE_SALT',       '/y~I4/;`i-_Z,)z[9f<?`q84S?/KN;mOFRC$[oD/lU.:ERIbj9Kpd/n(v6D;hW5.');
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