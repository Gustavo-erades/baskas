<?php 
    include_once("../database/conexao.php");
    if(isset($_POST['inputCredAdm'])){ //admbaskas1608
        $sql="SELECT * FROM users WHERE senha='".md5($_POST['inputCredAdm'])."'";
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        session_start();
        if(mysqli_num_rows($result)>0){
            $_SESSION["logado"]=true;
            $_SESSION['senhaErrada']=false;
            header("Location:../../public/index.php?cod=adm-0");
        }else{
            $_SESSION["senhaErrada"]=true;
            $_SESSION["logado"]=false;
            header("Location:../../public/index.php?cod=user-1");
            
        }
    }
    
    