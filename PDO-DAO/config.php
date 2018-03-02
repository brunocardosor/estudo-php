<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 01/03/2018
 * Time: 21:42
 */

spl_autoload_register(function ($className){
   $filename = "Class".DIRECTORY_SEPARATOR.$className.".php";
    if(file_exists($filename)){
       require_once ($filename);
   }
});