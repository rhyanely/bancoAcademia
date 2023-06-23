<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    

<?php

$host = "localhost"; // endereço do servidor
$usuario = "root"; // usuário do MySQL
$senha = ""; // senha do MySQL
$database = "academia"; // nome do banco de dados

// Cria a conexão
$connection = new mysqli($host, $usuario, $senha, $database);

// Checa se a conexão foi realizada com sucesso
if ($connection->connect_error) {
    die("Falha de conexão: " . $connection->connect_error);
}
?>






</body>
</html>