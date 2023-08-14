<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\primeirosite\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'primeirosite' );

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
define( 'AUTH_KEY',         '*g4N/W#Wf| 2WzRBRjJO6XC0C4[k-i6DWw0y)Nr~m[WLm?]4Q}*PFq^_|:d.g9(Y' );
define( 'SECURE_AUTH_KEY',  '6Lz.[u)VWs=?zI[%`#:|}sTzIzc18iu-KmC}HM&mLv74@0QW2n{}cG/C@CIx}LSR' );
define( 'LOGGED_IN_KEY',    'GK_}x$|ttsH <pk^fMb7e(t%~4LM8qPWXy8*B,>Czpy%J`}V90:^E*bw<kx h!Y2' );
define( 'NONCE_KEY',        ';{M.-2uS|m<bf>BO>38~l>^zRGECYl80M4D9T-a*iZe(#pn,dxU)?L:ck}dP6i`d' );
define( 'AUTH_SALT',        '5QuQ-Lu<CW`CD}yLv~Z/TuIf8lg<#6m6`92-5Jy3OA%TfO_ @6.JO3*6rubQu-8f' );
define( 'SECURE_AUTH_SALT', '{`|1jtpf){@DXUZL%*pS_tfZezs5IWk0<nbz@1Cmp4<S].OB]e.w(1t5yk:.SuvC' );
define( 'LOGGED_IN_SALT',   'IFK9Mp[yJk[=uT4LAI^;06d qUts4g-/2n?N: Ow=<?2Hu>htLkb=-M{~0>qH>}]' );
define( 'NONCE_SALT',       '?4=tf__ =X?M#fKN_z}$#4=5Z^yh3UPq%&B46|v8^tU).w+gqD|TH~`@]]boMTRZ' );

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
