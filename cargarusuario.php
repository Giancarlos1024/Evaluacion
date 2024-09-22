<?php
include 'clases/usuarios.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$usuario = new Usuarios(null, null, null, $email, $contrasena);

if ($usuario->registrar()) {
    echo "Usuario registrado con éxito.";
} else {
    echo "Error al registrar el usuario.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estas en cargarusuario.php</h1>
</body>
</html>