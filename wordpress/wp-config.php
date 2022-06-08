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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', "des(sign)" );


/** Usuário do banco de dados MySQL */
define( 'DB_USER', "root" );


/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "" );


/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );


/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );


/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'K@}y%&S7&WGj{fb`O5i}vwddo)Mj#|AW$R>+]:U*`F}Sz>q#&pdK$#{vUgeL>6]]' );

define( 'SECURE_AUTH_KEY',  ':2a{3YT2L&{.${p&>9V`Q_J0_UXC59F0+h>WM9 tW$o#,Mv+>9?k=FB0&PjCy]S2' );

define( 'LOGGED_IN_KEY',    ']e7S{C;8) BXj4T[(HZmpH{6L&XVfgd$:=?iWJbkVI?}OlJIFKKW+$ !Fa|2GiB7' );

define( 'NONCE_KEY',        '7F(^)(`}~9ie9ME|2DS-iUN!wpV99RR1 p2*_!bMzzFQ4dEIh$leW`;4Cj7]Kp{q' );

define( 'AUTH_SALT',        ';RYa0DU.j)1*`:@l+TGkN=ovyIs=3h9ssExrTN&6pL:^v*LO-H{}O`c/;2:7t^w;' );

define( 'SECURE_AUTH_SALT', '>Bh#I5sxClGvKO2rwN6VhB#v-)?1&AO/G8:2|.5RtHs$KXwNdT!>5l!Mp^EuLIpH' );

define( 'LOGGED_IN_SALT',   '|<`F9~rc%rEM/x*>(<3rV)%`wQ d+Xg|iIQv/H+,e-<F(5mpn:}};*pZk98lIa5:' );

define( 'NONCE_SALT',       'Sma_?E,Bz^nYd^pt2Xw_]Ui(Z}sv_yO?nzO(#J&vd8|.wrP|Fcdk!T4Fbv6LZ%em' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
