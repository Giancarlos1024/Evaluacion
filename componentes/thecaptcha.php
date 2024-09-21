<?php
session_start();
header("Content-type: image/jpeg");
$imagecapt=imagecreate(110,30);
imagecolorallocate($imagecapt,230, 235, 234);
$colortxt=imagecolorallocate($imagecapt,16, 18, 18);
imagestring($imagecapt,9,21,11,$_SESSION['captcha'],$colortxt);
imagejpeg($imagecapt);
imagedestroy($imagecapt);
?>