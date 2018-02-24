<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'AleSoc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '? nWrIxxp2<~HlRLhS^(d4qWoj,w^~{_j]+sF6l]Ok^H OJm7Vxq%FyJ!95<-z4R');
define('SECURE_AUTH_KEY',  '>t{C_;tZp/Wx,FA^cbp(j)4u=WiR=/sbelgX.|?zP9!mUv~Kd??.^#4?Kr@+!Gib');
define('LOGGED_IN_KEY',    'E32m}/a$8mW)jQG:!`u.}4x}wF02C`ybYxrG^l,2lZOjvHQ&!~`8Ws}Pk%IRK=wI');
define('NONCE_KEY',        'j:|!sCmh{Z7J m-hh~Xi3el!VQ/w$/E/v:7*y4%PXD|_Erz#WtW$nWY,YsQDY^>2');
define('AUTH_SALT',        'G=`5@,}?=YM0mYk>Aa,J{e<cVKG;ye87;^eJk7C-.^;wp3PS1PoPcbZl|7G~MH%x');
define('SECURE_AUTH_SALT', 'O(!zQ|r?&0lWYe/ajJK?<7Mktz~$~q_Q@d,bZQ8.f&-i?*?W2rTL1J5ih-+v!Ira');
define('LOGGED_IN_SALT',   'IjxZX~@Y*SgF]Jw75mK`mdvxumvKW8k!j9mCi!]vKL5.Tvr@Z?!&Gfk_^_aF)D2[');
define('NONCE_SALT',       '{yecfy%MM2F2Fh{{p9}y=kH PMq{/j%N,zWhhLK52n+q/(U{q-SD4mL}u{v^=Wq{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
