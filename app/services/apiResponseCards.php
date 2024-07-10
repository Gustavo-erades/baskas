<?php
    require_once("../database/conexao.php");
    header('Content-Type: application/json');
    $return=Array();
    $sql='
        SELECT jogador,dia,historico FROM bd_baskas.historico WHERE jogador=? ORDER BY dia; 
    ';
    $nome=$_POST['jogador'];
    $stmt=mysqli_prepare($conn,$sql);
    if($stmt===false){
        die('Erro na preparação da declaração SQL (apiResponseCards)'.mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt,'s',$nome);
    $result=mysqli_stmt_execute($stmt);
    if($result===false){
        die('Erro na excução da query SQL (apiResponseCards):'.mysqli_error($conn));
    }else{
       $resultSql=mysqli_stmt_get_result($stmt);
       if(mysqli_num_rows($resultSql)>0){
        while($row=mysqli_fetch_assoc($resultSql)){
            $return[]=$row;
        }
       }else{
        $return[]=array('erro'=>'nenhum histórico recente até o momento');
       }
        echo json_encode($return); 
    }