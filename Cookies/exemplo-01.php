<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 05/03/2018
 * Time: 15:28
 */

$data = array(
    "nome" => "Bruno Cardoso"
);

//criando o cookie
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

//recuperando cookie
echo $_COOKIE["NOME_DO_COOKIE"];