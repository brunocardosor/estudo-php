<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 04/03/2018
 * Time: 22:47
 */

$file = "img.jpg";

$base64 = base64_encode(file_get_contents($file));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($file);
$base64encode = "data:". $mimetype .";base64,". $base64;

?>
<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>
<img src="<?=$base64encode?>">
