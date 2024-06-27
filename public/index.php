<?php 
    session_start();

    $path=$_SERVER["DOCUMENT_ROOT"]."/testes/baskas/";
    $_SESSION["path"]=$path."public/pags/";
    $_SESSION["paginacao"]=$path."app/helpers/paginacao.php";
    $_SESSION["paginacaoLoading"]=$path."app/helpers/loading.php";
    
    include_once($_SESSION["paginacao"]);
    include($conteudo);
    include_once($_SESSION["paginacaoLoading"]);
    include($load);
    
    