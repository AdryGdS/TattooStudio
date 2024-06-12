<?php 
// Inclua o arquivo de conexão
include 'conexao.php';

// Receba os dados do formulário via POST
$user = $_POST["txt_login"];
$password = $_POST["txt_senha"];

// Prepare e execute a consulta SQL
$sql = $pdo->prepare("SELECT * FROM tb_login WHERE user = :user AND password = :password");
$sql->bindParam(':user', $user);
$sql->bindParam(':password', $password);
$sql->execute();

// Verifique se o login foi bem-sucedido
if ($sql->rowCount() > 0) {
    echo "<center>";
	echo "<hr>";
	echo "Conta logada com sucesso!";
	echo "<hr>";
	echo "<br>";

    // Redirecione com base no tipo de usuário
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    if (substr($row['user'], 0, 1) == 'f' && substr($row['user'], -1) == '@') {
        // Usuário com user que começa com 'f' e termina com '@'
        header("Location: homefunc.html"); // Redireciona para a página de funcionários
        exit();
    } else {
        // Outros usuários
        header("Location: perfil.php"); // Redireciona para a página de perfil
        exit();
    }
} else { 
    echo "<center>";
	echo "<hr>";
	echo "Conta não logada!";
	echo "<hr>";
	echo "<br>";    
}
?>
