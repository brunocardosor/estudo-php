<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 16/02/2018
 * Time: 20:23
 */
require_once("config.php");
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Bruno Cardoso");
$cad->setEmail("brun.oana@hotmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
