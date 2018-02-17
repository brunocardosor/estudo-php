<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 16/02/2018
 * Time: 20:18
 */

class Cadastro
{
    private $nome;
    private $email;
    private $senha;

    /**
     * @return mixed
     */
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha():string
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha(string $senha)
    {
        $this->senha = $senha;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha(),
        ));
    }


}