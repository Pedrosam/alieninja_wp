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
define( 'DB_NAME', 'alieni52_wpdevs' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'alieni52_devs' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'n245hXB2wtZ2' );

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
define( 'AUTH_KEY',         '581nAb+WITP{!,b~E2:H,Ht&MrsYBB$bJ~si];b3.,oKQ9e+c]?|o[j?rXesv$3F' );
define( 'SECURE_AUTH_KEY',  ']gB=UK~J|@N8T2I`d1)Mf2C?q$.T4ZpR&?=[]&C@4gax$daj+^<2?N7CB!S&81&`' );
define( 'LOGGED_IN_KEY',    ';;l>vlkI$cQhDC]L?+r`b#[ #lRVE~*0wtM]P4wXCI. a9Y.JaS#+{,:Q;93@/Re' );
define( 'NONCE_KEY',        'QXp{r04N>JJm>[9FC9]!ljh>M>D>bEsjVDzfB,)@pKs(@q$hL1cOcLHd!A@2Rf{~' );
define( 'AUTH_SALT',        'ghi(`ok6TTOh@[+%<HBc}|}R(Ybe_a*qr+ZhK<FzbZW3Q(DYl{i67?]GQ;k=d)SE' );
define( 'SECURE_AUTH_SALT', 'DRA@W@oH*GfF*1=&JfNC6*>f@i@9FY,(69J3!ur(u-vp!8dY<^?B,A70l)*>54@<' );
define( 'LOGGED_IN_SALT',   'tI)t..&XNP ~;Sf {#ZK-FcvSfU:|2[e#>9n6:OllNl+<KR7q{*ci]}B9E*7=K a' );
define( 'NONCE_SALT',       'IYU6.~l*;-?1V5MXxL/g W4.]~M?IQ4$ @sS2X-t}+&I?*`+; v7Gmr27E2K/}_d' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
