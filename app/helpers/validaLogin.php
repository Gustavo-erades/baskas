<?php 
    session_start();
    $_SESSION["logado"]=true;
    if($_SESSION["logado"]){
        header("Location:../../public/index.php?cod=adm-0");
    }
    