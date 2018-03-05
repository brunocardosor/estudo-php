<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file_upload">
    <input type="submit" value="SEND">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 04/03/2018
 * Time: 23:00
 */
//testando qual o tipo de request
if($_SERVER["REQUEST_METHOD"] === "POST"){
    //capturando arquivo enviado pelo cliente
    $file = $_FILES["file_upload"];

    //criando nome para a pasta dos arquivos enviados
    $dirUploads = "uploads";

    //verificando se há erro
    if($file["error"]){
        throw new Exception("Error: ". $file["error"]);
    }

    //verificando se já existe o diretório dos arquivos
    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    //movendo o arquivo enviado da pasta temporária para a pasta final
    if (move_uploaded_file($file["tmp_name"]/**/, $dirUploads. DIRECTORY_SEPARATOR . $file["name"])){
        echo "O arquivo " . $file["name"] . " foi enviado com sucesso";
    } else {
        throw new Exception("Nâo foi possível realizar o upload");
    }
}

