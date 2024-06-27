<?php
    if(isset($_GET['salvarAttr'])){
        $passe=$_GET['passe'];
        $rebot=$_GET['rebot'];
        $shot=$_GET['shot'];
        $shot3=$_GET['shot3'];
        $infilt=$_GET['infilt'];
        $bandj=$_GET['bandj'];
        $contr=$_GET['contr'];
        $toco=$_GET['toco'];
        $roubo=$_GET['roubo'];
        $forca=$_GET['forca'];
        $velo=$_GET['velo'];
        $def=$_GET['def'];
        $visao=$_GET['visao'];
        $clutch=$_GET['clutch'];
        $decisao=$_GET['decisao'];

        $peso1=[$toco, $roubo, $forca, $velo, $clutch];
        $peso2=[$passe, $rebot, $shot3,$infilt,$bandj,$contr];
        $peso3=[$shot,$def,$visao,$decisao];

        $valMult=0;
        for($i=0;$i<sizeof($peso1);$i++){
            $valMult=$valMult+(intval($peso1[$i]));
        }
        for($i=0;$i<sizeof($peso2);$i++){
            $valMult=$valMult+(intval($peso2[$i])*2);
        }
        for($i=0;$i<sizeof($peso3);$i++){
            $valMult=$valMult+(intval($peso3[$i])*3);
        } 
        $med=round($valMult/29);
        header("Location:../../public/index.php?cod=adm-0&med=".$med."");
        echo $med;
    }else{
        echo "não enviou nada";
    }