<?php
require("../database/conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titulos'])) {
    $voto = explode(",", $_POST['titulos']);

    $mvp = $voto[0];
    $mip = $voto[1];
    $bagre = $voto[2];

    $fuso = new DateTimeZone('America/Sao_Paulo');
    $dia = new DateTime('now', $fuso);
    $data = $dia->format("Y/m/d H:m:s");

    $sql = 'INSERT INTO bd_baskas.titulo  VALUES ( ?, ?, ?, ?)';
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo 'Erro na preparação da declaração SQL: ' . mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, 'ssss', $data, $mvp,  $mip, $bagre);

        $result = mysqli_stmt_execute($stmt);

        if ($result === false) {
            echo 'Erro na execução da declaração SQL: ' . mysqli_stmt_error($stmt);
        } else {
            echo "voto cadastrado com sucesso!";
            zerarBdVotos($conn);
        }
        mysqli_stmt_close($stmt);
    }
    $conn->close();
} else {
    echo "Voto não enviado";
}
function zerarBdVotos($conn)
{
    $sql = 'TRUNCATE TABLE bd_baskas.votacao;';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo 'Erro na preparação da declaração SQL: ' . mysqli_error($conn);
    } else {
        $result = mysqli_stmt_execute($stmt);
        if ($result === false) {
            echo 'Erro na execução da declaração SQL: ' . mysqli_stmt_error($stmt);
        } else {
            echo "dados da votação zerados com sucesso!";
        }
        mysqli_stmt_close($stmt);
    }
    $conn->close();
}
