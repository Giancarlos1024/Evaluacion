<?php 
$unidtabla=$_POST['unidad'];
$fechatabla=$_POST['fecha'];

include('conex.php');

mysqli_query($conexiontab,"INSERT INTO clases VALUES(DEFAULT,'$unidtabla','$fechatabla')");

header("Location:../unidad1.php?ok_db");


?>
