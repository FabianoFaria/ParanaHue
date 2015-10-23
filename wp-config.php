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
define('DB_NAME', 'paranahue');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_:6j]A#7|EQ{O<(Soqa#!R-DtAlYii-9,we0tDCzhoh$BjTIb/;}4. 2?}So<J&U');
define('SECURE_AUTH_KEY',  ')b{4-):*zX%2L2Wx.tOISyo&Jm OG0ag%TM5qSBAUTw-iVCvmM/$D-*{rG,y0QxF');
define('LOGGED_IN_KEY',    '2mq$5$Cv3Igm]0*6Hr qmf&*zW|!w|4F}F(@Y&iU-#16`-PBP!d`5_ju+nXk+/2F');
define('NONCE_KEY',        'Ps}b~9/JN:q{oqD`NF[bKiYF,? ]HE|EVQE4&2Df%kj9YcB~Gm1[Dyvw^6M}3V1T');
define('AUTH_SALT',        '+e-ziQ]:;cm0X>Z`yZ8&+]v+9doK Q{ch^+QqUP!TSs`]P!Pj|E>$_6CY{C9><q0');
define('SECURE_AUTH_SALT', '4r-Qb&p$BeYj0>#uBzh:kBl9gM;-G>4y~u*Hkk@FAFLWfZkbBvLGXhdB:z+{ub&B');
define('LOGGED_IN_SALT',   'eod+=WWwd7za@~5/L3Aw9*7.MuO[7@Om^OT*(f,!ycD 8bkx3eXfC~L;mmr+<X:t');
define('NONCE_SALT',       'BWls>V+?BPBY/?.}jOB+6IM1^8-3HV#{p51_Qf;Xf%Ou$;:o|eq/?iUk}3,3wtLy');

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
