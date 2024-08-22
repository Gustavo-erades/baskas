<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');
$return = array();
$responseTitulo = $_POST['responseTitulo'];/*'Alejandro'*/

$sql = "
        SELECT DATE_FORMAT(dia, '%d/%m/%Y') as dia, 'mvp' AS titulo
        FROM titulo
        WHERE mvp = '".$responseTitulo."'

        UNION ALL

        SELECT DATE_FORMAT(dia, '%d/%m/%Y') as dia, 'mip' AS titulo
        FROM titulo
        WHERE mip = '".$responseTitulo."'

        UNION ALL

        SELECT DATE_FORMAT(dia, '%d/%m/%Y') as dia, 'bagre' AS titulo
        FROM titulo
        WHERE bagre = '".$responseTitulo."'; 
    ";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false) {
    die('Erro na preparação da declaração SQL (apiResponseTitulo)' . mysqli_error($conn));
}
$result = mysqli_stmt_execute($stmt);
if ($result === false) {
    die('Erro na excução da query SQL (apiResponseTitulo):' . mysqli_error($conn));
} else {
    $resultSql = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($resultSql) > 0) {
        while ($row = mysqli_fetch_assoc($resultSql)) {
            $return[] = $row;
        }
    } 
    echo json_encode($return);
}
