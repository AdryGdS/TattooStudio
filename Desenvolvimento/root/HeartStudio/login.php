<?php
// Configuração da conexão com o banco de dados
$db_url = "postgres://tattoostudiobd_user:8qfTsXmQh2wKvx5DEJMREg68ZpLMM2Av@dpg-cpkt9ovsc6pc73f4blbg-a/tattoostudiobd";

try {
    // Conectando ao banco de dados usando a URL fornecida pelo Render
    $pdo = new PDO($db_url);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados estabelecida com sucesso!<br>";

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
        echo "Conta logada com sucesso!<br>";
        // Redirecionar o usuário após o login
        header("Location: pagina_de_inicio.php");
        exit();
    } else { 
        echo "Usuário ou senha inválidos!<br>";  
    }
} catch (PDOException $e) {
    // Se ocorrer um erro ao conectar-se ao banco de dados
    echo "Erro ao conectar-se ao banco de dados: " . $e->getMessage();
}
?>
