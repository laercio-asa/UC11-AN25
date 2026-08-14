<?php 

//$host = "localhost";
// define = variavel CONSTANTE, sempre maiuscula.
define('HOST', 'an25lego.mysql.dbaas.com.br');
define('USER', 'an25lego');
define('PASS', 'Senac#tian25');
define('DBNAME', 'an25lego');
// tratamento de erro, caso a conexão falhe.
// todo tratamento de erro deve ser feito com try / catch
try {
    $conn = new mysqli(HOST, USER, PASS, DBNAME);
}
catch (Exception $e) {
    // Banco de Dados falhou, o que fazer?
    // Vamos direcionar para uma página de erro.
    header('Location: http://www.tian25.educacao.ws/pages/errors/banco_dados.php');
}






