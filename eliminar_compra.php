<?php
include ("recursos.php");
$carrito->eliminar_compra($_GET['cod']);
header("Location: unidad7.php");
?>