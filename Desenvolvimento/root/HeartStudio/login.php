<?php 
Include 'conexao.php';
$user = $_POST ["txt_login"];
$password = $_POST ["txt_senha"];
$sql = mysql_query ("select * from tb_login where
                     (user='$user') and password='$password'");
if (mysql_num_rows($sql) > 0) {
    echo "<center>";
	echo "<hr>";
	echo "Conta logada com sucesso!";
	echo "<hr>";
	echo "<br>";

    $row = mysql_fetch_assoc($sql);
    if (substr($row['user'], 0, 1) == 'f' && substr($row['user'], -1) == '@') {
        // Usuário com user que começa com 'f' e termina com '@'
        header("Location: homefunc.html"); // Redireciona para a página de funcionários
        exit();
    } else {
        // Outros usuários
        header("Location: perfil.html"); // Redireciona para a página de perfil
        exit();
    }
}
else { 
    echo "<center>";
	echo "<hr>";
	echo "Conta não logada!";
	echo "<hr>";
	echo "<br>";    
}
?>