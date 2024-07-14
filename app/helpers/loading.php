<?php
if(isset($_GET['cod']));
    switch($_GET['cod']){
        case 'user-0':
            $load=$_SESSION["path"]."componentes/users/loading.html";
        break;
        case 'user-1':
            $load=$_SESSION["path"]."componentes/users/loading.html";
        break;
        case 'adm-0':
            $load=$_SESSION["path"]."componentes/adm/loading.html";
        break;
        case 'adm-1':
            $load=$_SESSION["path"]."componentes/adm/loading.html";
        break;
        default:
            $load=$_SESSION["path"]."componentes/users/loading.html";
        break;
    }