<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 02/03/2018
 * Time: 21:47
 */

$name = "images";
if(!is_dir($name)){
    //criar diretório
    mkdir($name);
    echo "Diretorio criado com sucesso";
} else {
    //remove diretório
    rmdir($name);
    echo "Diretório removido com sucesso";
}