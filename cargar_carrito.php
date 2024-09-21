<?php
include ("recursos.php");
$carrito->introducir_compra($_GET['codigoProd'], $_GET['nombreProd'], $_GET['descProd'], $_GET['precioProd']);
header("Location: unidad7.php");
?>