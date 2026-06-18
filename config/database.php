<?php
include __DIR__ . '/conexao.php';
header('Content-Type: application/json; charset=utf-8');
try {
    //SERVIÇOS CONSULTA
    $stmt = $pdo->query("SELECT title as tituloServico, description as descricaoServico FROM services");

    // buscando os resultados
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // convertendo para json, e mandando para o arquivo get-services.php
    //  echo json_encode("../public/assets/api/get-services.php"($services, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    // mandando para 

    // TESTEMUNHAS CONSULTA
    $stmt = $pdo->query("SELECT name as nome_testemunha, message as mensagem_servico, avaliacao as avaliacao_testemunha, date as data_avaliacao FROM testimonials ORDER BY date DESC");

    // buscando os resultados da consulta
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // convertendo para json, e mandando para o arquivo get-services.php
    // echo json_encode("../public/assets/api/get-services.php" ($testimonials, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
} catch (\Throwable $err) {
    echo $err;
}
