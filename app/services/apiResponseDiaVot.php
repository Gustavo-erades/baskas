<?php
header('Content-Type: application/json');
$fuso = new DateTimeZone('America/Sao_Paulo');
$dia = new DateTime('now', $fuso);
$dataVot = $dia->format("d/m/Y");
$return=["dia"=>$dataVot];
echo json_encode($return);
