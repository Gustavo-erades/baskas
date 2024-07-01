<?php
include_once("../funcoes/atualizaCard.php");

if (isset($_POST['salvarAttr'])) {

    $nome = $_POST['salvarAttr'];
    $passe = intval($_POST['passe']);
    $rebot =  intval($_POST['rebot']);
    $shot =  intval($_POST['shot']);
    $shot3 =  intval($_POST['shot3']);
    $infilt =  intval($_POST['infilt']);
    $bandj =  intval($_POST['bandj']);
    $contr =  intval($_POST['contr']);
    $toco =  intval($_POST['toco']);
    $roubo =  intval($_POST['roubo']);
    $forca =  intval($_POST['forca']);
    $velo =  intval($_POST['velo']);
    $def =  intval($_POST['def']);
    $visao =  intval($_POST['visao']);
    $clutch =  intval($_POST['clutch']);
    $decisao =  intval($_POST['decisao']);
    $historico =  intval($_POST['historico']);

    $peso1 = [$toco, $roubo, $forca, $velo, $clutch];
    $peso2 = [$passe, $rebot, $shot3, $infilt, $bandj, $contr];
    $peso3 = [$shot, $def, $visao, $decisao];

    $valMult = 0;
    for ($i = 0; $i < sizeof($peso1); $i++) {
        $valMult = $valMult + ($peso1[$i]);
    }
    for ($i = 0; $i < sizeof($peso2); $i++) {
        $valMult = $valMult + ($peso2[$i] * 2);
    }
    for ($i = 0; $i < sizeof($peso3); $i++) {
        $valMult = $valMult + ($peso3[$i] * 3);
    }
    if($historico!=0){
        $med = round(($valMult+($historico*4))/ 33);
    }else{
        $med = round($valMult/29);
    }
    $data=[$med,$passe,$rebot,$shot,$shot3,$infilt,$bandj,$contr,$toco,$roubo,$forca,$velo,$def,$visao,$clutch,$decisao,$historico,$nome];
    atualizaCard($data);

} else {
    echo "não enviou nada";
}
