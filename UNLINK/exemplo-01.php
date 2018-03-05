<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 04/03/2018
 * Time: 22:20
 */
$file = fopen("file.txt", "w+");
fclose($file);

unlink("file.txt");
echo "arquivo removido com sucesso";