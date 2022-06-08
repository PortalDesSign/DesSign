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
define( 'DB_NAME', 'des(sign)' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jK3HK3qD&4x>,,&^p&IFE7W_LmlZt!O<8B?K>SzeF1WPITVk[N^1fMt!`?2D$]N+' );
define( 'SECURE_AUTH_KEY',  'drw~J:icO!$hX[)-B<,yAik(4((S<+7QI^A9nTh51>BIF@DWRi].Un~RrcSMg?`e' );
define( 'LOGGED_IN_KEY',    '(ef8*<]{.Pg&N6?9$4D$$DwaUB2gkev4-=g$7?EyY^0{$GQoCIWrIv>qmfIZ=k|/' );
define( 'NONCE_KEY',        'GD/~PVHFExwuH>}bWis8SQ5<M`q?<X;H67s<1)JPX/71+kME9Sk:^~W]U,8p8`L2' );
define( 'AUTH_SALT',        'qBXbtZ^]9a1$!av^wGTt:mAJW3l]{H/g]#vnGi^?0B%GeRD+c;DN053z@4Ch1C.D' );
define( 'SECURE_AUTH_SALT', '(bzdkfze>DO:Ul;E3vzX daCmnq4[E8M@@L<p5fxMRbn.>imbYorYK1_aPb*l[Ho' );
define( 'LOGGED_IN_SALT',   'GZ_%FE:6|7&SWMDCB|O:Z>9{T>MUmZr@}oX0L`{@l[Z<6jcE()ddwog-q1CQ6 hf' );
define( 'NONCE_SALT',       '<0q7%bxIPTqjCzFl(yy1.6@GKJ7V$_VK+Jr{}{~_<u=^9uSI$Hczngce/2t4j+cK' );

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
