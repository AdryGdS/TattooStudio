<?php 
Include 'conexao.php';
$user = $_POST ["txt_login"];
$password = $_POST ["txt_senha"];
$sql = mysql_query ("select * from tb_login where
                     user='$user'");
if (mysql_num_rows($sql) > 0) {
    echo "<center>";
	echo "<hr>";
	echo "Conta ja cadastrada!";
	echo "<hr>";
	echo "<br>";
} 
else {
   $sql = mysql_query ("insert into tb_login (user,password)
                       values ('$user','$password')");   
   echo "<center>";
	echo "<hr>";
	echo "Conta cadastrada com sucesso!";
	echo "<hr>";
	echo "<br>";    
}
?>