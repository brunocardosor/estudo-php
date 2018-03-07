<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/03/2018
 * Time: 14:57
 */

function error_handler($code, $message, $file, $line){
    return json_encode(array(
      "code"=>$code,
      "message"=>$message,
      "file"=>$file,
      "line"=>$line
    ));
}

set_error_handler("error_handler");

$total = 100/0;