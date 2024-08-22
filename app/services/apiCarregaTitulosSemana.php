<?php
    require_once("../database/conexao.php");
    header('Content-Type: application/json');
    $return=Array();
    $sql="
        SELECT DATE_FORMAT(dia, '%d/%m/%Y') as dia, mvp, mip, bagre FROM bd_baskas.titulo ORDER BY dia DESC LIMIT 1;
    ";
    $stmt=mysqli_prepare($conn,$sql);
    if($stmt===false){
        die('Erro na preparação da declaração SQL (apiResponseCards)'.mysqli_error($conn));
    }
    $result=mysqli_stmt_execute($stmt);
    if($result===false){
        die('Erro na excução da query SQL (apiCarregaTitulosSemana.php):'.mysqli_error($conn));
    }else{
       $resultSql=mysqli_stmt_get_result($stmt);
       if(mysqli_num_rows($resultSql)>0){
        while($row=mysqli_fetch_assoc($resultSql)){
            $return[]=$row;
        }
       }else{
        $return[]=array('erro'=>'nenhum título até o momento');
       }
        echo json_encode($return); 
    }