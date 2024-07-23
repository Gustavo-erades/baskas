<?php
require_once("../database/conexao.php");

header('Content-Type: application/json');

$return = array();
echo var_dump($_POST);
if (isset($_POST['nome'], $_POST['mvp'], $_POST['mip'], $_POST['bagre'])) {
    $nome = $_POST['nome'];
    $mvp = $_POST['mvp'];
    $mip = $_POST['mip'];
    $bagre = $_POST['bagre'];

    $fuso= new DateTimeZone('America/Sao_Paulo');
    $dia=new DateTime('now',$fuso);
    $dataVot=$dia->format("Y/m/d H:m:s");

    $id=1;

    $sql = 'INSERT INTO bd_baskas.votacao  VALUES (?, ?, ?, ?, ?, ?)';
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        $return['success'] = false;
        $return['error'] = 'Erro na preparação da declaração SQL: ' . mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, 'dsssss', $id ,$dataVot, $nome, $mvp, $mip, $bagre);

        $result = mysqli_stmt_execute($stmt);

        if ($result === false) {
            $return['success'] = false;
            $return['error'] = 'Erro na execução da declaração SQL: ' . mysqli_stmt_error($stmt);
        } else {
            $return['success'] = true;
            $return['message'] = 'Dados inseridos com sucesso.';
        }

        mysqli_stmt_close($stmt);
    }
} else {
    $return['success'] = false;
    $return['error'] = 'Dados não recebidos corretamente.';
}

$conn->close();

echo json_encode($return); // Saída JSON

?>
