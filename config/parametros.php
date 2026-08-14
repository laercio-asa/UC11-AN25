<?php
// __DIR__ = constante mágica do PHP
// que retorna o caminho do diretório atual do arquivo.
// echo dirname(__DIR__) . '<br>';
// echo __DIR__ . '<br>';
// define('DIR_ROOT',  __DIR__ . '/..');

// usar esta constante para definir caminhos no BackEnd
define('DIR_ROOT', dirname(__DIR__));
// usar esta constante para definir caminhos no FrontEnd
// define('BASE_URL', 'http://localhost/');
// mostrar o caminho do diretório raiz do servidor
// echo $_SERVER['DOCUMENT_ROOT'];
// mostra o caminho do diretório do arquivo atual

define(
    'BASE_PATH',
    rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\')
);
