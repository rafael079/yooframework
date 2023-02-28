<?php

/**
 * Arquivo criado e desenvolvido por YOO Internet ltda.
 * Todos os Direitos reservados. É expressamente proibida a venda troca e 
 * utilização deste sistema sem autorização prévia do fabricante.
 * 
 * Acesse: www.yoointernet.com.br
 * Contato: sac@yoointernet.com.br
 * 
 * */
// define o tempo de expiração do cache da sessão
ini_set('session.cache_expire', 60);
// inicia a seção do sistema
session_start();

// define o controle de acesso aos arquivos
define('NO_ACCESS', '8f8829082b3bb75906a2e18ea83d5f4c');

// conjunto de caracteres do sistema
header('Content-type: text/html; charset=UTF-8');

defined("DS") ||
        /** define o separador de diretórios * */
        define("DS", DIRECTORY_SEPARATOR);
defined("APPS_PATH") ||
        /** define o caminho do diretório da aplicação * */
        define("APPS_PATH", realpath(dirname(__FILE__) . DS . '..' . DS . 'application'));

defined("LIBS_PATH") ||
        /** define o caminho do diretório da biblioteca de classes do sistema * */
        define("LIBS_PATH", realpath(dirname(__FILE__) . DS . '..' . DS . 'libraries'));

// define os caminhos de inclusão para os arquivos do sistema
set_include_path(implode(PATH_SEPARATOR, array(
            APPS_PATH,
            LIBS_PATH,
            get_include_path(),
        )));

// inclui a classe de carregamento automático das classes do sistema
require('Yoo/Application.php');
$application = new Yoo_Application();
$application->run();

