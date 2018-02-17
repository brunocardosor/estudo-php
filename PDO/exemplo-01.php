<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/02/2018
 * Time: 14:55
 */
//Conexão
$conexao = new PDO(
    "mysql:dbname=mysqli_banco;host=localhost",
    "root",
    "");

//Insert =============================================
$stmt = $conexao->prepare(
    "INSERT INTO tb_usuario (login, senha)".
    "values (:login, :senha)");
$login = "usuario2";
$senha = "123123123";
$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
//Select =============================================
$stmt = $conexao->prepare("SELECT * FROM tb_usuario ORDER BY login");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);
//Update =============================================
$stmt = $conexao->prepare("UPDATE tb_usuario SET login= :login, senha= :senha where idusuario=:id");
$id = 1;
$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
$stmt->bindParam(":id",$id);
$stmt->execute();
//Delete =============================================
$stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE idusuario=:id");
$stmt->bindParam(":id",$id);
$stmt->execute();