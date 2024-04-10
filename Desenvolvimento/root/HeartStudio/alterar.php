<?php
   include 'conexao.php';
   
        
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
            
        $sql = mysql_query("update tb_agendamento set tatuador='$tatuador', tamanho_tatuagem='$tamanho_tatuagem', data_sessao='$data_sessao', hora_sessao='$hora_sessao', cor='$cor', infocont='$infocont', preco='$preco' where nome_cliente='$cliente'");
        header('Location: indexlista.html');

?>