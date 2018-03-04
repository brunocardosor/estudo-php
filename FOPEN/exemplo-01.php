<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 04/03/2018
 * Time: 19:01
 */
//Abre o arquivo - W+ (Caso não exista, o arquivo será criado);
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-M-D H:I:S") . "\r\n");

fclose($file);