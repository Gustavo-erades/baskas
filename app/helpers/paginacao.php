<?php 
    if(isset($_GET['cod'])?$_GET['cod']:$_GET['cod']='user-0');
    switch($_GET['cod']){
        case 'user-0':
            $conteudo=$_SESSION["path"]."pagsUsers/home.php";
        break;
        case 'user-1':
            $conteudo=$_SESSION["path"]."pagsUsers/login.php";
        break;
        case 'adm-0':
            $conteudo=$_SESSION["path"]."pagsAdm/admHome.php";
        break;
        default:
            $conteudo=$_SESSION["path"]."pagsUsers/home.php";
        break;
    }