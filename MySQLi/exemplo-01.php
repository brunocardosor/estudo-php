<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/02/2018
 * Time: 14:18
 */

$conexao = new mysqli("localhost",
    "root",
    "",
    "mysqli_banco");
$login = "usuario";
$senha = "123456";
if($conexao->connect_error){
    echo "Error: ".$conexao->connect_error;
}

$stmt = $conexao->prepare("INSERT INTO tb_usuario(login, senha) VALUES(?,?)");
$stmt->bind_param("ss",
    $login
    ,$senha);
$stmt->execute();
