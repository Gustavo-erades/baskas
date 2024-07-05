<?php
    function insereHistorico($dataHist){
        include("../database/conexao.php");
        $sql='
            INSERT INTO bd_baskas.historico VALUES(?,?,?,?);
        ';
        $stmt=mysqli_prepare($conn,$sql);
        if($stmt===false){
            die('Erro na preparação da declaração SQL (insereHistorico):'.mysqli_error($conn));
        }
        $fuso= new DateTimeZone('America/Sao_Paulo');
        $dia=new DateTime('now',$fuso);
        $dado=$dia->format("Y/m/d H:m:s");
        mysqli_stmt_bind_param(
            $stmt,'ssdd',
            $dataHist[0],
            $dado,
            $dataHist[1],
            $dataHist[2]
        );
        $result=mysqli_stmt_execute($stmt);
        if($result===false){
            die('Erro na execução da declaração SQL (insereHistorico):'.mysqli_stmt_error($stmt));
        }
        mysqli_stmt_close($stmt);
        $conn->close();
    }