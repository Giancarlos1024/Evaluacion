<?php
include ("clases/usuarios.php");
$usuarios= new Usuarios('Martina','Barzabal','01-12-2005');
$usuarios->imprime_caracteristicas();
?>