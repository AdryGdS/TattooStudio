<?php
$db_url = "postgres://tattoostudiobd_user:8qfTsXmQh2wKvx5DEJMREg68ZpLMM2Av@dpg-cpkt9ovsc6pc73f4blbg-a.oregon-postgres.render.com/tattoostudiobd";

try {
    // Conectando ao banco de dados usando a URL fornecida pelo Render
    $pdo = new PDO($db_url);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados estabelecida com sucesso!<br>";
} catch (PDOException $e) {
    // Se ocorrer um erro ao conectar-se ao banco de dados
    echo "Erro ao conectar-se ao banco de dados: " . $e->getMessage();
    die(); // Encerra o script se ocorrer um erro de conexão
}
?>
