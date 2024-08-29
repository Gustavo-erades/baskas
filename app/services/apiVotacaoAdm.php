<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');
$return = array();
$fuso = new DateTimeZone('America/Sao_Paulo');
$dia = new DateTime('now', $fuso);
$dataVot = $dia->format("Y/m/d H:m:s");
$sql = "
        INSERT INTO bd_baskas.dados_votacao(".$_POST['votacaoAdm'].") VALUES(?);
    ";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false) {
    die('Erro na preparação da declaração SQL (apiVotacaoAdm)' . mysqli_error($conn));
} else {
    mysqli_stmt_bind_param($stmt, 's', $dataVot);
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiVotacaoAdm.php):' . mysqli_error($conn));
    } else {
        $return[] = array('status' => true);
        echo json_encode($return);
    }
}
