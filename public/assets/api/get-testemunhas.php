<?php
//get-services.php
//ativando erros visíveis no php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include __DIR__ . '/../../../config/conexao.php';

header('Content-Type: application/json; charset=utf-8');

try {

    $stmt = $pdo->query("
        SELECT name as nomeTestemunha, 
        message as mensagemServico ,
        estrelas_avaliacao as avaliacao,
        MONTH(date) as mes, 
        DAY(date) as dia, 
        YEAR(date) as ano
        FROM testimonials 
        ORDER BY date DESC
    ");

    // buscando os resultados da consulta
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "testemunhas" => $testimonials
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} catch (Throwable $err) {
    http_response_code(500);
    echo json_encode([
        "erro" => $err->getMessage()
    ]);
}
