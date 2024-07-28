<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');
$quantTotal=quantTotal($conn);
$mvp=mvp($conn);
$mip=mip($conn);
$bagre=bagre($conn);
$return=[$quantTotal,$mvp,$mip,$bagre];
echo json_encode($return);
function quantTotal($conn){
     $sql = '
        SELECT COUNT(*) AS quantTotal
        FROM bd_baskas.votacao; 
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiResponseVot, mvp)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiResponseVot, mvp):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            $row = mysqli_fetch_assoc($resultSql);
            return $row;
        } else {
            return null;
        }
    }
}
function mvp($conn){
    $sql = '
        SELECT mvp AS nomeVotMvp, COUNT(*) AS quantVotMvp
        FROM bd_baskas.votacao
        GROUP BY mvp
        HAVING COUNT(*) > 1
        ORDER BY quantVotMvp DESC
        LIMIT 1; 
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiResponseVot, mvp)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiResponseVot, mvp):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            $row = mysqli_fetch_assoc($resultSql);
            return $row;
        } else {
            return 0;
        }
    }
}
function mip($conn){
    $sql = '
        SELECT mip  AS nomeVotMip, COUNT(*) AS quantVotMip
        FROM bd_baskas.votacao
        GROUP BY mip
        HAVING COUNT(*) > 1
        ORDER BY quantVotMip DESC
        LIMIT 1; 
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiResponseVot, mvp)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiResponseVot, mvp):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            $row = mysqli_fetch_assoc($resultSql);
            return $row;
        } else {
            return 0;
        }
    }
}
function bagre($conn){
    $sql = '
        SELECT bagre  AS nomeVotBagre, COUNT(*) AS quantVotBagre
        FROM bd_baskas.votacao
        GROUP BY bagre
        HAVING COUNT(*) > 1
        ORDER BY quantVotBagre DESC
        LIMIT 1; 
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiResponseVot, mvp)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiResponseVot, mvp):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            $row = mysqli_fetch_assoc($resultSql);
            return $row;
        } else {
            return 0;
        }
    }
}