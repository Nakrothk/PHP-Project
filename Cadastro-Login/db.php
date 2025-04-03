<?php

echo "conexao com banco de dados<br>";

$host = 'localhost'; // servidor do banco de dados
$dbname = 'meu_banco';  // nome do banco de dados
$user = 'root'; // usuario 
$pass = ''; // senha

// configurando bando de dados
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro na conexao: " . $e-> getMessage());

}
?>