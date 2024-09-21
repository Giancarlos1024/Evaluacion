<?php
// Verifica si el archivo de imagen existe
$imagePath = "imagenes/unidad4.jpg";
if (!file_exists($imagePath)) {
    die("La imagen no existe.");
}

// Intenta crear la imagen desde el archivo JPEG
$img = @imagecreatefromjpeg($imagePath);
if (!$img) {
    die("No se pudo crear la imagen desde el archivo JPEG.");
}

$alto = 150;
$ancho = 150;
$img_destino = imagecreatetruecolor($ancho, $alto);

// Copia y redimensiona la imagen original
imagecopyresampled($img_destino, $img, 0, 0, 0, 0, $ancho, $alto, imagesx($img), imagesy($img));

// Guarda la imagen en un nuevo archivo
$newImagePath = "imagenes/unidad4_miniatura.jpg";
if (!imagejpeg($img_destino, $newImagePath)) {
    die("No se pudo guardar la imagen redimensionada.");
}

// Libera la memoria
imagedestroy($img);
imagedestroy($img_destino);
?>
