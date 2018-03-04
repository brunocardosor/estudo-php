<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 01/03/2018
 * Time: 21:29
 */

class SQL extends PDO {
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=mysqli_banco;host=localhost",
            "root",
            "");
    }

    private function setParams($statement, $params = array()){
        foreach ($params as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()) : array {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}