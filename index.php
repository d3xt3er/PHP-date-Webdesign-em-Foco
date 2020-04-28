<?php
//Forma procedural
// date_default_timezone_set("America/Sao_Paulo");
// echo date("Y-m-d H:i:s");
// $now = strtotime(date("Y-m-d H:i:s"));
// $otherDate = strtotime("2020-04-28 13:18:45");
// echo $now. '<br>';
// echo date("Y-m-d", $now);
// if($now > $otherDate){
//     echo "A data ".date('d/m/Y',$now)." é maior";
// }
// else{
//     echo "A data atual é menor";
// }

//Forma orientada a objetos
$now = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
$otherDate = new DateTime("2020-11-07 17:00:00", new DateTimeZone("America/Sao_Paulo"));

//Format - Método
// $dateBr = $now->format("d/m/y H:i:s");
// $timeBr = $now->format("H:i");
// echo "Fulano falou as ".$timeBr." do dia ". $dateBr;

//Modify - Método
// $dateModify = $now->modify("+3 days")->format("d/m/Y");
// $dateModify = $now->modify("-3 days")->format("d/m/Y");
// $dateModify = $now->modify("+1 year +1 month +10 days +30 minutes")->format("d/m/Y H:i");
// $dateModify = $now->modify("last day of this month")->format("d/m/Y");
// $dateModify = $now->modify("last day of next month")->format("d/m/Y");
// $dateModify = $now->modify("first day of this month")->format("d/m/Y");
// echo $dateModify;

//Add and Sub - Método
// $dateAdd = $now->add(new DateInterval("P10DT3H"))->format("d/m/Y H:i");
// $dateSub = $now->sub(new DateInterval("P10DT3H"))->format("d/m/Y H:i");
// echo $dateSub;

//Diff - Método
$dateDiff = $now->diff($otherDate);
if($dateDiff->m > 2){
    echo "Sua conta foi bloqueada";
}
else{
    echo "Ok";
}
