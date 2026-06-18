
<?php
// CONEXÃO COM O BANCO DE DADOS!
// sSEMPRE USAR ESSA LINA DE COMANDO QUADO ELE FALAR QUE O USER PORTFOLIO_USER NO TIVER PRIVILEGIOS!

//GRANT ALL PRIVILEGES 
//ON portfolio_emb.* 
//TO 'portfolio_user'@'localhost';

//ALTER USER 'portfolio_user'@'localhost' 
// IDENTIFIED BY 'biabroetto122@';

// GRANT ALL PRIVILEGES ON portfolio_emb.* 
// TO 'portfolio_user'@'localhost';

// FLUSH PRIVILEGES;

//PARA VER OS PERFIS EO HOST DO BANCO
//SELECT user, host FROM mysql.user;

$host = 'localhost';
$port = '3306';
$db = 'portfolio_emb';
$user = 'portfolio_user';
$pass = 'biabroetto122@';// senha geral para criar conexoes no mysql workbench

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