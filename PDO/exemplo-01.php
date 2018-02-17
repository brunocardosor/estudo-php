<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/02/2018
 * Time: 14:55
 */

$conexao = new PDO(
    "mysql:dbname=mysqli_banco;host=localhost",
    "root",
    "");

$stmt = $conexao->prepare("SELECT * FROM tb_usuario ORDER BY login");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
    foreach ($row as $item => $value) {
        echo "<strong>".$item.":</strong>".$value."<br/>";
    }
    echo "========================================<br/>";
}

