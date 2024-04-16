<?php 
$servidor="127.0.0.1";
$usuario="root";
$senha="usbw";
$banco="agendamento";
$conecta_db=mysql_connect($servidor, $usuario, $senha) or die (mysql_error());
mysql_select_db($banco) or die ("Erro ao Conectar!");
?>

/*
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