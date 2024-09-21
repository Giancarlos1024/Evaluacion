<?php 
include("conex.php");
$id_claseli = $_GET['id_clase'];
mysqli_query($conexiontab,"DELETE FROM clases WHERE id_clase = '$id_claseli'");
header("Location:../unidad1.php");
?>