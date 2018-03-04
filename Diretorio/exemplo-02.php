<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 02/03/2018
 * Time: 22:29
 */

$images = scandir("images");

$data = array();

foreach ($images as $item) {
    //verifica se no array há itens com as características "." e ".."
    if(!in_array($item, array(".", ".."))){
        $filename = "images". DIRECTORY_SEPARATOR . $item;
        //captura informações do diretório
        $info = pathinfo($filename);
        //tamanho do arquivo
        $info["size"] = filesize($filename);
        //Data da ultima modificação do arquivo
        $info["modified"] = date("d/m/y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/projeto-web/estudo-php/Diretorio/".str_replace("\\","/", $filename);
        //adiciona as informações do array info, ao array data
        array_push($data, $info);
    }
}

echo json_encode($data);
