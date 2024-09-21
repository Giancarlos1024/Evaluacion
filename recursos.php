<?php
include ("clases/basededatos.php");
include ("clases/productos.php");
include ("clases/carrito.php");

$baseDatos = new Basedatos ('localhost:3306', 'root', '123456', 'phpavanzado');
$productos = new Productos ($baseDatos);
$carrito = new Carrito ($baseDatos);
?>