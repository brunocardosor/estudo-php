<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 16/02/2018
 * Time: 12:21
 */
spl_autoload_register(function($nameClass){
    $dirClass = "class";
    $fileName = (string) $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";
    if(file_exists($fileName)){
        require_once($fileName);
    }
});
