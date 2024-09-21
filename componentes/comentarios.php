<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");

$nombre_apellido = $_POST['nombreApellido'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];
$fecha_hora = date("Y-m-d H:i:s");

$contenido ="<p>nombre:".$_POST['nombreApellido']."</p>
<p>correo:".$_POST['correo']."</p>
<p>Fecha y hora: ".$fecha_hora."</p>
<p>comentario:".$_POST['comentario']."</p>
<hr/>"; 
$textone = fopen('comentarios.txt','a+');
fputs($textone, $contenido);
fclose($textone);
header("location:../unidad3.php?enviado");
?>
