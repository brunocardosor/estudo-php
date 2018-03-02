<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 01/03/2018
 * Time: 22:01
 */

class Usuario
{
    private $idUsuario;
    private $login;
    private $senha;
    private $dtcadastro;

    public function __toString()
    {
        return json_encode(array(
           "idUsuario" => $this->getIdUsuario(),
           "login" => $this->getDescricaoLogin(),
           "senha" => $this->getDescricaoSenha(),
           "dtcadastro" => $this->getDateCadastro()
        ));
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario): void
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getDescricaoLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setDescricaoLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getDescricaoSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setDescricaoSenha($senha): void
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getDateCadastro()
    {
        return $this->dtcadastro;
    }

    /**
     * @param mixed $dtcadastro
     */
    public function setDateCadastro($dtcadastro): void
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function loadById($id){
        $sql = new SQL();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE idusuario=:id", array(
            ":id" => $id
        ));
        if(isset($result[0])){
            $row = $result[0];
            $this->setIdUsuario($row['idusuario']);
            $this->setDescricaoLogin($row['login']);
            $this->setDescricaoSenha($row['senha']);
            $this->getDateCadastro(new DateTime($row['dtcadastro']));
        }
    }

    public static function listar(){
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuario ORDER BY login");
    }

    public static function search(string $login){
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuario WHERE login LIKE :value ORDER BY login", array(
            ':value'=>"%".$login."%"
        ));
    }

    /**
     * @param string $login
     * @param string $senha
     * @throws Exception
     */
    public function login(string $login, string $senha){
        $sql = new SQL();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE login=:login AND senha=:senha ORDER BY login", array(
            ":login"=> $login,
            ":senha"=> $senha
        ));
        if(isset($result[0])){
            $row = $result[0];
            $this->setIdUsuario($row['idusuario']);
            $this->setDescricaoLogin($row['login']);
            $this->setDescricaoSenha($row['senha']);
            $this->setDateCadastro(new DateTime($row['dtcadastro']));
        } else {
            throw new Exception("Login ou Senha incompatível", 405);
        }
    }

}