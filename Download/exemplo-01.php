<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 05/03/2018
 * Time: 14:28
 */

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

//baixando o arquivo
$content = file_get_contents($link);

//transformando dados da URL em um array (scheme, host, path)
$parse = parse_url($link);

//vendo o array da url
var_dump($parse);

//capturando o nome do arquivo
$basename = basename($parse["path"]);

//criando o arquivo localmente
$file = fopen($basename, "w+");

//escrivendo o arquivo
fwrite($file, $content);

//fechando o arquivo
fclose($file);
?>
<img src="<?=$basename?>">
