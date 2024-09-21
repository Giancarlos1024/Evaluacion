
<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$diario = $_POST['dia'];
$mesario = $_POST['mes'];
$aniario = $_POST['anio'];
$fechaIngresada= date($aniario."-".$mesario."-".$diario);
$fechaHoy= date("Y-m-d");

    if($fechaIngresada<$fechaHoy){
    header("Location:../unidad2.php?Finalizado");
} 
else{
    $calculo = strtotime($fechaIngresada) - strtotime($fechaHoy);

    $dias= intval($calculo/86400);
    header ("location:../unidad2.php?dias=$dias");
} ?>
