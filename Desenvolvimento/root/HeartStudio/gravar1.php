<?php
// Configuração da conexão com o banco de dados
$db_url = "postgres://tattoostudiobd_user:8qfTsXmQh2wKvx5DEJMREg68ZpLMM2Av@dpg-cpkt9ovsc6pc73f4blbg-a/tattoostudiobd";

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

// Receba os dados do formulário via POST
$cliente = $_POST["txt_cliente"];
$tatuador = $_POST["txt_tatuador"];
$tamanho_tatuagem = $_POST["txt_tamanho_tatuagem"];
$data_sessao = $_POST["txt_data_sessao"];
$hora_sessao = $_POST["txt_hora_sessao"];
$cor = $_POST["txt_cor"];
$infocont = $_POST["txt_contato"];
$preco = $tamanho_tatuagem * 20;

// Calcula o preço com base no tamanho da tatuagem e na cor
if ($cor == "2") {
    $preco *= 1.5;
}

$codigo_agendamento = $tatuador . $data_sessao . $hora_sessao;

// Verifica se já existe um agendamento com o mesmo código
$sql_check = $pdo->prepare("SELECT * FROM tb_agendamento WHERE codigo_agendamento = :codigo_agendamento");
$sql_check->bindParam(':codigo_agendamento', $codigo_agendamento);
$sql_check->execute();

if ($sql_check->rowCount() > 0) {
    // Redireciona para a página de erro se o agendamento já existe
    header('Location: erro_cliente.html');
    exit();
} else {
    // Insere os dados do agendamento no banco de dados
    $sql_insert = $pdo->prepare("INSERT INTO tb_agendamento (nome_cliente, data_sessao, hora_sessao, tatuador, tamanho_tatuagem, cor, infocont, preco, codigo_agendamento)
                                 VALUES (:cliente, :data_sessao, :hora_sessao, :tatuador, :tamanho_tatuagem, :cor, :infocont, :preco, :codigo_agendamento)");
    $sql_insert->bindParam(':cliente', $cliente);
    $sql_insert->bindParam(':data_sessao', $data_sessao);
    $sql_insert->bindParam(':hora_sessao', $hora_sessao);
    $sql_insert->bindParam(':tatuador', $tatuador);
    $sql_insert->bindParam(':tamanho_tatuagem', $tamanho_tatuagem);
    $sql_insert->bindParam(':cor', $cor);
    $sql_insert->bindParam(':infocont', $infocont);
    $sql_insert->bindParam(':preco', $preco);
    $sql_insert->bindParam(':codigo_agendamento', $codigo_agendamento);
    $sql_insert->execute();

    // Redireciona para a página de sucesso após a inserção no banco de dados
    header('Location: certo_cliente.html');
    exit();
}
?>
