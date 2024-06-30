<?php
function atualizaCard($data)
{
    include_once("../database/conexao.php");

    $sql = 'UPDATE bd_baskas.jogadores 
            SET elo=?, passe=?, rebot=?, shot=?, shot3=?, 
            infilt=?, bandj=?, contr=?, toco=?, roubo=?, 
            forca=?, velo=?, def=?, visao=?, clutch=?, decisao=? 
            WHERE nome=?';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL: ' . mysqli_error($conn));
    }
    mysqli_stmt_bind_param(
        $stmt,
        'dddddddddddddddds',
        $data[0], //elo
        $data[1], //passe
        $data[2], //rebot
        $data[3], //shot
        $data[4], //shot3
        $data[5], //infilt
        $data[6], //bandj
        $data[7], //contr
        $data[8], //toco
        $data[9], //roubo
        $data[10],//forca
        $data[11], //velo
        $data[12], //def
        $data[13], //visao
        $data[14], //clutch
        $data[15], //decisao
        $data[16], //nome
    );
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na execução da declaração SQL: ' . mysqli_stmt_error($stmt));
    } else {
        header("Location:../../public/index.php?cod=adm-0");
    }
    mysqli_stmt_close($stmt);
}
