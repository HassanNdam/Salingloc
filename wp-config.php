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
define( 'DB_NAME', 'sailingloc' );

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
define( 'AUTH_KEY',         'vSqO=;aCB`Tc%fgy%y_AEY[@LGP}A#(>Nfia?V#qvaI4  _X7`]>hZcl;k=iGjid' );
define( 'SECURE_AUTH_KEY',  'WhSRfY3T!Eji3Q;,rNr7@1dW6B<8FCWq@ffHMm3!LE}vx6d4,SGA`mXz9U&IZU}.' );
define( 'LOGGED_IN_KEY',    'J&R<9!_]m[GK){68h<?,v_=l&]>vB>4q3H%lNeIGu{Myf9N;49=L^fFPe{b3wtPX' );
define( 'NONCE_KEY',        'YJ3P/a^@MpvF{KsVZw52Bs|w[$-G;<[MJpMUGi`SXRv]NgCZOi0BN~97.{@Yz%Dr' );
define( 'AUTH_SALT',        's[K$q!9Tn>!I#$E27X{;Xp{4:g6F[e1(BV}l03T,z1!VXH1r6|`526YB4_X,GF6L' );
define( 'SECURE_AUTH_SALT', 'qj}1QeFeui(nUX@zhzn0/Y-VJv-R_P7, _)Fk)a]zz.yk.ZBaV>354<*{$*>AA^+' );
define( 'LOGGED_IN_SALT',   '-7EM>,>S~O~)=q39Vdj=WUUjV/0b{/9A%_t6lxOk^#:s*{6_GE%O)x]S3H^g-U?*' );
define( 'NONCE_SALT',       '/XST!(>#T=Z2Je`m@ZuUHD,x#/i6G6Z ;#/Vh@> s*zz+(x2=)tc%V[m3X@srrL~' );
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
