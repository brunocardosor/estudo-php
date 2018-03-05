<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 05/03/2018
 * Time: 15:19
 */

$cep = "63011070";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

print_r($data);