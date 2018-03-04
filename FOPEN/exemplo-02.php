<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 04/03/2018
 * Time: 19:08
 */

require_once ("config.php");

$sql = new SQL();

$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY login");

$colunas = array();

foreach ($usuarios[0] as $usuario => $dado) {
    array_push($colunas, ucfirst($usuario));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $colunas) . "\r\n");

foreach ($usuarios as $usuario) {
    $data = array();

    foreach ($usuario as $key => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);

