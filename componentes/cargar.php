<?php 
session_start();
if($_POST['codigo']==$_SESSION['captcha']){
$nombtabla=$_POST['nombre'];
$apetabla=$_POST['apellido'];
$corretabla=$_POST['correo'];
$consultabla=$_POST['consulta'];
include("conex.php");
mysqli_query($conexiontab,"INSERT INTO consultas values(Default,'$nombtabla','$apetabla','$consultabla')");
header("Location:../unidad5.php?ok_db");}
else{
    echo "error captcha1";  
}
?>

