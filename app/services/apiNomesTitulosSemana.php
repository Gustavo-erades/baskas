<?php
require_once("../database/conexao.php");
header('Content-Type: application/json');
$mvp=listaNomesMvp($conn);
$mip=listaNomesMip($conn);
$bagre=listaNomesBagre($conn);
$return = [$mvp,$mip,$bagre];
echo json_encode($return);
function listaNomesMvp($conn)
{
    $sql = '
        SELECT DISTINCT mvp AS nomeVotMvp
        FROM bd_baskas.votacao;
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiNomesTitulosSemana, mvp)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiNomesTitulosSemana, mvp):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            while ($row = mysqli_fetch_assoc($resultSql)) {
                $return[]= $row;
            }
        } else {
            return 0;
        }
        return $return;
    }
}
function listaNomesMip($conn)
{
    $sql = '
        SELECT mip AS nomeVotmip
        FROM bd_baskas.votacao;
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiNomesTitulosSemana, mip)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiNomesTitulosSemana, mip):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            while ($row = mysqli_fetch_assoc($resultSql)) {
                $return[]= $row;
            }
        } else {
            return 0;
        }
        return $return;
    }
}
function listaNomesBagre($conn)
{
    $sql = '
        SELECT bagre AS nomeVotbagre
        FROM bd_baskas.votacao;
    ';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die('Erro na preparação da declaração SQL (apiNomesTitulosSemana, bagre)' . mysqli_error($conn));
    }
    $result = mysqli_stmt_execute($stmt);
    if ($result === false) {
        die('Erro na excução da query SQL (apiNomesTitulosSemana, bagre):' . mysqli_error($conn));
    } else {
        $resultSql = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($resultSql) > 0) {
            while ($row = mysqli_fetch_assoc($resultSql)) {
                $return[]= $row;
            }
        } else {
            return 0;
        }
        return $return;
    }
}
