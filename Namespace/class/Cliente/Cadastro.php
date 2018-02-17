<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/02/2018
 * Time: 12:05
 */

namespace Cliente;

class Cadastro extends \Cadastro
{
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}