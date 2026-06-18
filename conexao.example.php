<?php 

$host = 'localhost';
$port = '3306';
$db = 'nome_do_banco';
$user = 'usuario';
$pass = 'senha';

try{
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$db;charset=utf8",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo("Conexão bem sucedida!");
}catch (PDOException $e){
    die("Erro de conexão ! " . $e->getMessage());
}

?>
