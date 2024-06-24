<?php 
    session_start();

    $path=$_SERVER["DOCUMENT_ROOT"]."/testes/baskas/";
    $_SESSION["path"]=$path."public/pags/";
    $_SESSION["paginacao"]=$path."app/helpers/paginacao.php";
    
    include_once($_SESSION["paginacao"]);
    include($conteudo);
    