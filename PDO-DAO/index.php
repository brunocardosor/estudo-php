<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 01/03/2018
 * Time: 21:44
 */

require_once ("config.php");

$usuario = new Usuario();
$usuario->setDescricaoLogin('aluno');
$usuario->setDescricaoSenha('@123@123');
$usuario->addUsuario();
echo $usuario;
