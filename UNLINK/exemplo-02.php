<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 04/03/2018
 * Time: 22:23
 */

if(!is_dir("images")) mkdir("images");
foreach (scandir("images") as $item) {
    if(!in_array($item, array(".",".."))){
        //excluindo os arquivos
        unlink("images/".$item);
    }
}