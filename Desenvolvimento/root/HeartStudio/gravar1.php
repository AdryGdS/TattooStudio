<?php 
Include 'conexao.php';
$cliente = $_POST ["txt_cliente"];
$tatuador = $_POST ["txt_tatuador"];
$tamanho_tatuagem = $_POST ["txt_tamanho_tatuagem"];
$data_sessao = $_POST ["txt_data_sessao"];
$hora_sessao = $_POST ["txt_hora_sessao"];
$cor = $_POST ["txt_cor"];
$infocont = $_POST ["txt_contato"];
$preco = $tamanho_tatuagem*20;
if($cor == "2" ){
	$preco = $preco*1.5;
}else{
	$preco = $preco;
}
$codigo_agendamento = $tatuador.$data_sessao.$hora_sessao;
$sql = mysql_query ("select * from tb_agendamento where
					codigo_agendamento='$codigo_agendamento'");
if (mysql_num_rows($sql) > 0) {
    
	header('Location: erro_cliente.html');
} 
else {
   $sql = mysql_query ("insert into tb_agendamento (nome_cliente,data_sessao,hora_sessao,tatuador,tamanho_tatuagem,cor,infocont, preco,codigo_agendamento)
                       values ('$cliente','$data_sessao','$hora_sessao','$tatuador','$tamanho_tatuagem','$cor', '$infocont','$preco','$codigo_agendamento')");
	 header('Location: certo_cliente.html');
}

	
?>
