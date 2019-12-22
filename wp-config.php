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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+Tt7wwakE]F#4;xn|0=75P3/yDO~TJ(w[Rn$+.sM<+,pGBXHrBd?=A8WeE](lc3}' );
define( 'SECURE_AUTH_KEY',  'X*O`t.CE6Mrbg{g)J?fLZm;BtxsYb&WaV9*{@jz_bIGZGW:++Bz{88F_|]5vM1H,' );
define( 'LOGGED_IN_KEY',    'UJyNQE3qI~h9]Tc:YzbMN^]E=;S-3oPSuf+w&qir~<W$<FhrQqU!iWqgg(SF,sC!' );
define( 'NONCE_KEY',        '-[~F$8eyfP M-gLsdw.J,.e&0tgK]s _2-KF<5#S)3q#sX7+MeK*89F^NA47M%Xk' );
define( 'AUTH_SALT',        'JA!yq1a;w[4XPzDk8`c}f-7yYWLn9kRcGB2kL[`fDir#m+ueGy,&EzhO1_Y{454h' );
define( 'SECURE_AUTH_SALT', '8B{+Khv~}siY`f$^:Cy1gU/W}& i-@XPkL>{]~|t=jaa^Evm.iERa:%tE/Q,fwVD' );
define( 'LOGGED_IN_SALT',   'qs24qGcS=_Qw>M%8i^( }G}gYUy|/?J@`DvL?4*Brr##N1)YPD@zYvCHX@Tln-))' );
define( 'NONCE_SALT',       'fqCUo$A2?HVNi5f=;73F!(d;`<}tKVV;}=a_qQ:$q#^SpdQJ}:H3-nO3Hh,Sox;z' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
