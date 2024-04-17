/*
<?php
$host = 'localhost';
$dbname = 'nomedobancodedados';
$username = 'nomedousuario';
$password = 'senha';
?>
isso aqui entraria no conexao.php

<?php
require_once 'pdoconfig.php';
try {
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username,
$password);
echo "Conectado a $dbname em $host com sucesso.";
} catch (PDOException $pe) {
die("Não foi possível se conectar ao banco de dados $dbname :" . $pe
>getMessage());
}
?>

isso aqui entraria no lugar do codigo atual do conexao.php

<?php
require_once 'pdoconfig.php';
try {
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username,
$password);
echo "Conectado a $dbname em $host com sucesso.";
} catch (PDOException $pe) {
die("Não foi possível se conectar ao banco de dados $dbname :" . $pe
>getMessage());
}
?>
*/