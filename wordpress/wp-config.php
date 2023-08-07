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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'curso-ebac' );

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
define( 'AUTH_KEY',         'C<uK} ?t.(@4vGnd]N%KIWgBE*-b.#SyaHiCjFA:.6nW^G:iBp4:Dpp00@,</=)M' );
define( 'SECURE_AUTH_KEY',  'OccaBk8OIQ63xdWX~%k9g5[r>eZBU%:VPLuP*0cywl+jaw#J:cJp[`Qu6r_!fqYO' );
define( 'LOGGED_IN_KEY',    '-wF`ft5R~+)}q=nSFwpJv(((I.wu$v@`RR GV5h7aMb]#f4r0Lg<rutU8:@%lx1s' );
define( 'NONCE_KEY',        'z`RF@gjmG_=EMB({1xR92E s=kqy_b%Xaad*ie&b/4#+Gv]c}U`lVyk[a5#z?}]H' );
define( 'AUTH_SALT',        'B~VO/~/ZtV3a|-<v)c/q /7*6Z9Z%G#[LN%Ro^*$$mQaZ0 (vJJW`WsRebL`+,Qr' );
define( 'SECURE_AUTH_SALT', 'g4LU]~0%z<#9~_/J-GB[I:fJrI)e$@DfF`15^TtYyF~m<vMWno{ X.Nd~xjxSd5X' );
define( 'LOGGED_IN_SALT',   'Hg5F^}HiX&w<nx;;|jpj9Yeo73<2v^;oA8=!b~vFa[d^R[2xe5<-ocb|;pwUo=R;' );
define( 'NONCE_SALT',       'ey,Jhwj8foutXJg5%+DCF6iTuh;98t4UCvT;pqf4DD<7~2>tz)P&p&B&4my7|W1U' );

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
