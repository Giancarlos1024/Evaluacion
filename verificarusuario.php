<?php
include 'clases/usuarios.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

if (Usuarios::verificar($email, $contrasena)) {
    echo "Ingreso exitoso.";
} else {
    echo "Email o contraseña incorrectos.";
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
    <h1>Estas en verificarusuario.php</h1>
</body>
</html>
