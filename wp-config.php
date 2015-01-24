<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'visiocintas.local');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-+G?V|Tripb^@vJ-<}W$^MKY9u||]?S!J!J~:fsS2p|F;(e-}+~LXO0mA_Tx};W[');
define('SECURE_AUTH_KEY',  '2A!]7rpclFX=|PYeSQb$-r4RwFav x$~+<EnQLO2p&DCKp*eg+u@_SL63cf:eI.V');
define('LOGGED_IN_KEY',    'dCMSmzg-+Fgjx<}M)<!Rr<h]8P{4WW7< *2`G.;CX(lFB1NZ: N VI<aeS{<tJ|4');
define('NONCE_KEY',        '3WB10!t|gZsiX2MhS-fV>44VE-.)]LS.]}iQR+au6[=r->qvop}x6ItD>!M}]v#V');
define('AUTH_SALT',        'pH0w(4Ae}kQeCn1H=Ak{#lXM@/jvK6Jb.|7oCp{yIn7B2Ltljcr_&[#c>{-xwyOS');
define('SECURE_AUTH_SALT', '*&A|uUP|!RQKwKlA6)|)ClPoDlBF/p1/)g5 6xI9OnfP;D&)|xKW-C?=f)OAM ^x');
define('LOGGED_IN_SALT',   'e #e2c@4ROa1YU4d;k)eip+|CI4:[_Ft0;i^gV-6/Rf7DeuuCtG8t <^oHG#|`fT');
define('NONCE_SALT',       'w6+/`^9}-?_bC.UeSq:Jip^nVkR/FOG<0!-05i5@|kuG$/T#?Z,eU) 6,I&s{nE`');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
