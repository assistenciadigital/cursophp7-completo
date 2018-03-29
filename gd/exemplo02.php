<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "ALEX BUENO", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído em: ". date("d/m/Y")), $titleColor);

header("Content-type: image/jpeg");
imagejpeg($image); // Mostrar na tela
imagejpeg($image, "Certificado-".date("d-m-Y").".jpg"); // Salvar no disco
imagedestroy($image);

?>