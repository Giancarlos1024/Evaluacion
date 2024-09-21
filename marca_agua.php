<?php
$image ="imagenes/ari.jpg"; 
$marca_agua="imagenes/marca.png"; 

$img=imagecreatefrompng($marca_agua);
$ext=substr($image,-3);
$ext=strtolower($ext);
switch ($ext) {
    case 'gif':
        $img2=imagecreatefromgif($image);
        break;
    case 'jpg':
        $img2=imagecreatefromjpeg($image); 
        break;
    case 'png':
        $img2=imagecreatefrompng($image);
        break;
}
imagecopy($img2,$img,(imagesx($img2)/15),(imagesy($img2)/15),(imagesx($img)/250),(imagesy($img)/250),imagesx($img),imagesy($img));
header("Content-type:image/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
?>

