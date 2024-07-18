<?php 
    if(isset($_GET['cod'])?$_GET['cod']:$_GET['cod']='user-0');
    switch($_GET['cod']){
        case 'user-0':
            $conteudo=$_SESSION["path"]."pagsUsers/home.php";
        break;
        case 'user-1':
            $conteudo=$_SESSION["path"]."pagsUsers/login.php";
        break;
        case 'user-2':
            $conteudo=$_SESSION["path"]."pagsUsers/votacoes.php";
        break;
        case 'adm-0':
            if(isset($_SESSION["logado"])){
                $conteudo=$_SESSION["path"]."pagsAdm/admHome.php";
            }else{
                $conteudo=$_SESSION["path"]."erro404.html";
            }
        break;
        case 'adm-1':
            if(isset($_SESSION["logado"])){
                $conteudo=$_SESSION["path"]."pagsAdm/admTitulos.php";
            }else{
                $conteudo=$_SESSION["path"]."erro404.html";
            }
        break;
        default:
            $conteudo=$_SESSION["path"]."erro404.html";
        break;
    }