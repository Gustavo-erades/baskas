<?php
require_once("../database/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['voto'])) {
    $voto = explode(",",$_POST['voto']);

    $nome = $voto[3];
    $mvp = $voto[0];
    $mip = $voto[1];
    $bagre = $voto[2];

    $fuso= new DateTimeZone('America/Sao_Paulo');
    $dia=new DateTime('now',$fuso);
    $dataVot=$dia->format("Y/m/d H:m:s");

    $sql = 'INSERT INTO bd_baskas.votacao  VALUES ( ?, ?, ?, ?, ?)';
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo 'Erro na preparação da declaração SQL: ' . mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, 'sssss', $nome, $dataVot,  $mvp, $mip, $bagre);

        $result = mysqli_stmt_execute($stmt);

        if ($result === false) {
            echo 'Erro na execução da declaração SQL: ' . mysqli_stmt_error($stmt);
        } else {
            echo 'Dados inseridos com sucesso.';
        }
        mysqli_stmt_close($stmt);
    }
    $conn->close();

} else {
    echo "Voto não enviado";
}
