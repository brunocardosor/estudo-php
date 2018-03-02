<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/02/2018
 * Time: 15:42
 */

$conexao = new PDO("mysql:dbname=mysqli_banco;host=localhost",
    "root",
    "");
$conexao->beginTransaction();
$stmt = $conexao->prepare("DELETE FROM tb_usuario WHERE idusuario=:id");
$id = rand(1,5);
$stmt->bindParam(":id",$id);
//stmt->execute(array($id)); -- works too.
$stmt->execute();
//$conexao->rollBack(); //cancela a transação
$conexao->commit(); //confirma a transação