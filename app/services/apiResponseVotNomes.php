<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');
$return = array();
$sql = '
        SELECT nome FROM bd_baskas.jogadores ORDER BY nome ASC; 
    ';
$hist=$_POST['hist'];
$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false) {
    die('Erro na preparação da declaração SQL (apiResponseVotNomes)' . mysqli_error($conn));
}
$result = mysqli_stmt_execute($stmt);
if ($result === false) {
    die('Erro na excução da query SQL (apiResponseVotNomes):' . mysqli_error($conn));
} else {
    $resultSql = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($resultSql) > 0) {
        while ($row = mysqli_fetch_assoc($resultSql)) {
            $return[] = $row;
        }
    } else {
        $return[] = array('erro' => 'nenhum histórico recente até o momento');
    }
    echo json_encode($return);
}
