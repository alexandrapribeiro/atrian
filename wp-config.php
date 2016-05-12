<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */

define('DB_NAME', 'Minerva_atrian');

/** O nome do utilizador de MySQL */
define('DB_USER', 'Minerva_minerva');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'rowing2013');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'mysql3.host-services.com');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#8xT3P! MrjnF#}`hS0N]|l%F&KzY,&:-^1B/DKoVU,Tt$R|#|adE>[2sk:C,aUf');
define('SECURE_AUTH_KEY',  '$e|z)7,GcLA21!U>t?:*zAI{?V^<y;4}v%pmUn+#Z!4[![$tKeA.M0Sg?K$Wo4T-');
define('LOGGED_IN_KEY',    'Z0I`l7MZw;0F%Sw*Nb.Qc/#N&b,{QB WTR@BKx]I;MG|LwTeQ+O-Cg+>H A+)6@O');
define('NONCE_KEY',        '7^Na-tc(<Ug>J`8_M4 B?^pN.Ux,6,EpjY1v<w:l{IFug@qR-UP SVGHVcu@|Zjd');
define('AUTH_SALT',        '.vUOz!vY-jekXscr^9QNa3`_L1S+Hg^6ncHpQtEt9_,Nt&0i,QUjT`k7%7YlK|C.');
define('SECURE_AUTH_SALT', '|h+Tmie%dNl!3Wj{GBXtq(SXjY`-r$(mLs:`8ynVa~n8,2o3*8Z-*=3hbQk-,=j*');
define('LOGGED_IN_SALT',   'xy:NrW=Qnj7/(R7gS_l7G}DOw!d&%tf.Rd=T?E|o|A% jUBEO/vu!I>!NMog$Xd-');
define('NONCE_SALT',       '9Y<8Uw`%0O5bDk] m4 -Nl#V.GQ,}WpP@lIeTP-C@|v]<59oerq<y2w+EA{jDKZx');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'ab_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);
define('WP_CACHE', true);


/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');




/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
