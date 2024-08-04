<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');
$return = array();
$votTitulo=strtolower($_POST['votTitulo']);
//echo $votTitulo;
$sql = '
        SELECT '.$votTitulo.' AS nomeVotMvp, COUNT(*) AS quantVotMvp
        FROM bd_baskas.votacao
        GROUP BY '.$votTitulo.'
        ORDER BY quantVotMvp DESC; 
    ';
$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false) {
    die('Erro na preparação da declaração SQL (apiResponseVotDialog)' . mysqli_error($conn));
}
//mysqli_stmt_bind_param($stmt, 'ss', $votTitulo,$votTitulo);
$result = mysqli_stmt_execute($stmt);
if ($result === false) {
    die('Erro na excução da query SQL (apiResponseVotDialog):' . mysqli_error($conn));
} else {
    $resultSql = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($resultSql) > 0) {
        while ($row = mysqli_fetch_assoc($resultSql)) {
            $return[] = $row;
        }
    } else {
        $return[] = array('erro' => 'nenhum voto até o momento.');
    }
    echo json_encode($return);
}
