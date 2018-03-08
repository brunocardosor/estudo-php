<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/03/2018
 * Time: 16:26
 */


header("Content-Type: image/png");

$image = imagecreate(200, 200);

$pallete = array(
    "black" => imagecolorallocate($image, 0,0, 0),
    "red" => imagecolorallocate($image, 255, 0,0)
);

imagestring($image, 5, 50, 95, "Curso PHP7", $pallete["red"]);

imagepng($image);
imagedestroy($image);