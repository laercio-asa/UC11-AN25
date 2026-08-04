<?php 

//$host = "localhost";
// define = variavel CONSTANTE, sempre maiuscula.
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'projeto_teste');
// tratamento de erro, caso a conexão falhe.
// todo tratamento de erro deve ser feito com try / catch
try {
    $conn = new mysqli(HOST, USER, PASS, DBNAME);
}
catch (Exception $e) {
    // Banco de Dados falhou, o que fazer?
    // Vamos direcionar para uma página de erro.
    header('Location: http://localhost/AN25/Projeto/pages/errors/banco_dados.php');
}






