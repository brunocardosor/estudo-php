<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 01/03/2018
 * Time: 21:44
 */

require_once ("config.php");

$sql = new SQL();

$usuarios = $sql -> select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);