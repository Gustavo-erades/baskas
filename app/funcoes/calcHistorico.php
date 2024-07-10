<?php
function calcHistorico($jogador)
{
    include("../database/conexao.php");
    $sql1 = '
        SELECT COUNT(dia) FROM bd_baskas.historico WHERE jogador="' .$jogador. '";
    ';
    $result1 = mysqli_query($conn, $sql1);
    $quant= mysqli_fetch_assoc($result1)['COUNT(dia)'];
    $sql2 = '
        SELECT historico FROM bd_baskas.historico WHERE jogador="' . $jogador . '";
    ';
    $result2 = mysqli_query($conn, $sql2);
    $val=0;
    while ($dados = mysqli_fetch_array($result2)) {
        $val= $val+intval($dados['historico']);
    }
    $med=round($val/$quant);
    echo $med;
    return  $med;
}
