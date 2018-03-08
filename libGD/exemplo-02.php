<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/03/2018
 * Time: 16:35
 */

$image = imagecreatefromjpeg("certificado.jpg");

$black = imagecolorallocate($image, 0, 0,0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $black);
imagestring($image, 5, 440, 350, "Bruno Cardoso RIbeiro Pontes", $black);
imagestring($image, 5, 440, 370, "Concluído em :".date("d/m/y"), $black);

header("Content-type: image/jpeg");
imagejpeg($image, "Certificadov2.jpg", 50);
imagedestroy($image);