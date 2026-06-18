
<?php
session_start();
include_once __DIR__ . '/../config/conexao.php';

//processaDados.php
//verificando se os dados sao post
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método não permitido!');
}
// RECEBENDO DADOS DO FORMULÁRIO!

try {

    //validação contra CSRF PROTECTION
    // if (!isset($_POST['csrf']) || $_POST['csrf'] !== $_SESSION['csrf']) {
    //     exit('Token inválido');
    // }

    //dados formulário
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $descricaoServico = trim($_POST['descricao_servico'] ?? '');
    $estrelasAvaliacao = (int) ($_POST['rating'] ?? 0);
    $dataAvaliacao = date('Y-m-d H:i:s');

    //validações campos (nome, email,telefone)
    //nome
    if(empty($nome) || strlen($nome) < 3){
        exit('Nome Inválido');
    }

    //email
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        exit('Email Inválido!');
    }

    // Telefone apenas números (opcionalmente)
    if (!empty($phone) && !preg_match('/^[0-9\-\(\)\s]+$/', $phone)) {
        exit('Telefone inválido.');
    }

    // Mensagem limite de tamanho
    if (!empty($descricaoServico) && strlen($descricaoServico) < 2 || strlen($descricaoServico) > 1000) {
        exit('Descrição do serviço deve ter entre 2 e 1000 caracteres.');
    }

    // Estrelas entre 1 e 5
    if ($estrelasAvaliacao < 1 || $estrelasAvaliacao > 5) {
        $estrelasAvaliacao = 0;
    }

    //INSERINDO DADOS NO BANCO TABLE TESTIMONIALS!
    $sql = "
        INSERT INTO testimonials(name, message, email, phone, estrelas_avaliacao, date) 
        VALUES (:nome, :mensagem, :email , :phone, :rating, :data)
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':mensagem', $descricaoServico);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':rating', $estrelasAvaliacao, PDO::PARAM_INT);
    $stmt->bindValue(':data', $dataAvaliacao);

    $stmt->execute();

    // REDIRECIONANDO O USUÁRIO DEPOIS DO FORMULÁRIO SER ENVIADO!
    header("Location:index.php#page-testemunhas");
    exit;
} catch (PDOException $e) {
    echo 'Erro ao salvar dados:'  . $e->getMessage();
    // error_log($e->getMessage()); // não mostrar erro ao usuário
    http_response_code(500);
    exit('Erro interno.');
}

?>

