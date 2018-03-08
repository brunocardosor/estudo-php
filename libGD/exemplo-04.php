<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/03/2018
 * Time: 16:54
 */

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$width = 256;
$height = 256;

list($oldWidth, $oldHeight) = getimagesize($file);
$newImage = imagecreatetruecolor($width, $height);
$oldImage = imagecreatefromjpeg($file);

imagecopyresampled($newImage, $oldImage,
    0,0,
    0,0,
    $width, $height,
    $oldWidth,$oldHeight);

imagejpeg($newImage);
imagedestroy($oldImage);
imagedestroy($newImage);
