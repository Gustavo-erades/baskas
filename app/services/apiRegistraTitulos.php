<?php
require_once("../database/conexao.php");
var_dump($_POST['titulos']);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titulos'])) {
    $voto = explode(",",$_POST['titulos']);

    $mvp = $voto[0];
    $mip = $voto[1];
    $bagre = $voto[2];

    $fuso= new DateTimeZone('America/Sao_Paulo');
    $dia=new DateTime('now',$fuso);
    $dataVot=$dia->format("Y/m/d H:m:s");

    echo $mvp." ".$mip." ".$bagre;
/*
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
            session_start();
            echo "voto cadastrado com sucesso!";
            $_SESSION['votoContabilizado']=true;
        }
        mysqli_stmt_close($stmt);
    }
    $conn->close();*/

} else {
    echo "Voto não enviado";
}
