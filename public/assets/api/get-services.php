<?php
//get-services.php
//ativando erros visíveis no php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once __DIR__ . '/../../../config/conexao.php';

header('Content-Type: application/json; charset=utf-8');

try {

    $stmt = $pdo->query("
        SELECT 
            title AS tituloServico,
            description AS descricaoServico,
            imagens AS imagensCardsServicos
        FROM services
    ");

    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "servicos" => $services
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (Throwable $err) {
    http_response_code(500);
    echo json_encode([
        "erro" => $err->getMessage()
    ]);
}
