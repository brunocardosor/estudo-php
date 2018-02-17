<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/02/2018
 * Time: 14:31
 */

$conexao = new mysqli("localhost",
    "root",
    "",
    "mysqli_banco");

if($conexao->connect_error){
    echo "Error: ".$conexao->connect_error;
}

$result = $conexao->query("SELECT * FROM tb_usuario ORDER BY login");
while($row = $result->fetch_assoc()){
    var_dump($row);
}
