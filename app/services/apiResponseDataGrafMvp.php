<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');

// Definir a consulta SQL
$sql = 'SELECT DISTINCT mvp AS labels, COUNT(*) AS votosMvp FROM bd_baskas.votacao GROUP BY mvp';

// Preparar a declaração SQL
$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false) {
    die(json_encode(['erro' => 'Erro na preparação da declaração SQL: ' . mysqli_error($conn)]));
}

// Executar a declaração SQL
$result = mysqli_stmt_execute($stmt);
if ($result === false) {
    die(json_encode(['erro' => 'Erro na execução da query SQL: ' . mysqli_error($conn)]));
}

// Obter o resultado da consulta
$resultSql = mysqli_stmt_get_result($stmt);

// Verificar se há linhas no resultado
if (mysqli_num_rows($resultSql) > 0) {
    $return = [];
    while ($row = mysqli_fetch_assoc($resultSql)) {
        $return[] = $row;
    }
    echo json_encode($return); // Retornar os dados em JSON
} else {
    // Caso não haja resultados, retornar uma mensagem de erro em JSON
    echo json_encode(['erro' => 'Nenhum histórico recente até o momento']);
}

// Fechar a declaração
mysqli_stmt_close($stmt);

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
