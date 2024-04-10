<?php

include 'conexao.php';

if(isset($_POST['busca_nome']) != '') {
	$sql = mysql_query("select * from tb_agendamento where nome_cliente like  '{$_POST['busca_nome']}%' order by codigo_agendamento asc");
} else {
	$sql = mysql_query("select * from tb_agendamento order by tatuador asc");
}


if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_agendamento where codigo_agendamento=". $_GET['apagar']);
	header('Location: indexlistaapaga.html');
	return false;
	
}
if(isset($_GET['alterar'])){
	$sql = mysql_query("select * from tb_agendamento where codigo_agendamento=". $_GET['alterar']);
	$linha= mysql_fetch_assoc($sql);

$cliente = $linha ["nome_cliente"];
$tatuador = $linha ["tatuador"];
$tamanho_tatuagem = $linha ["tamanho_tatuagem"];
$data_sessao = $linha ["data_sessao"];
$hora_sessao = $linha ["hora_sessao"];
$cor = $linha ["cor"];
$infocont = $linha ["infocont"];
$preco = $linha ["preco"];

	$sql = mysql_query("update tb_agendamento set cliente='$cliente', tatuador='$tatuador', tamanho_tatuagem='$tamanho_tatuagem', data_sessao='$data_sessao', hora_sessao='$hora_sessao', cor='$cor', infocont='$infocont', preco='$preco' where codigo_agendamento=". $_GET['alterar']);
	header('Location: indexlista.html');
	return false;
	
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--========== BOX ICONS ==========-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Heart Tattoo Art Studio</title>
  </head>
  <body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="index.html#" class="nav__logo">Heart - Cliente Home</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="indexfunc.html#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="indexfunc.html#about" class="nav__link">Sobre</a>
            </li>
            <li class="nav__item">
              <a href="indexfunc.html#menu" class="nav__link">Portfolio</a>
            </li>
            <li class="nav__item">
              <a href="indexfunc.html#contact" class="nav__link">Agende</a>
            </li>

            <li><i class="bx bx-moon change-theme" id="theme-button"></i></li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>
    <main class="l-main">
      
    <!--========== LISTAGEM ==========-->
      <section class="menu section bd-container" id="menu">
        <span class="section-subtitle"></span>
        <h2 class="section-title">Agenda</h2>

        <div class="port__container1 bd-grid">
          <div class="port__content1">
				
          <form name="form1"  method="POST" action="listagem.php" class="linha1">DIGITE UM CLIENTE:
          <input type="text" name="busca_nome" class="busca">
          <input type="submit" value="FILTRAR" class="button1">
</form>
        <table class="xurubeixurubai" border="1" align="center">
		    
			</tr>
			<tr class="listagem2">
			<th >TATUADOR </th>&nbsp;
			<th >CLIENTE</th>
			<th >DATA</th>
			<th >HORA</th>
			<th >TAMANHO</th>
			<th >COR</th>
			<th >CONTATO</th>
			<th >PRECO</th>
			<th >APAGA</th>
			<th >EDITA</th>
			</tr>
			<tr>
			
			<?php
				while($linha = mysql_fetch_assoc($sql)) {
			?>
			<td align="center"><?php echo $linha['tatuador']; ?></td>
			<td align="center"><?php echo $linha['nome_cliente']; ?></td>
			<td align="center"><?php echo $linha['data_sessao']; ?></td>
			<td align="center"><?php echo $linha['hora_sessao']; ?></td>
			<td align="center"><?php echo $linha['tamanho_tatuagem']; ?></td>
			<td align="center"><?php echo $linha['cor']; ?></td>
			<td align="center"><?php echo $linha['infocont']; ?></td>
			<td align="center"><?php echo $linha['preco']; ?></td>
			
	       <th><a href="listagem.php?apagar='<?php echo $linha['codigo_agendamento']; ?>'"><img src='assets/img/trashok.png'></a></th>
		   <th><a href="alterar_cliente.php?alterar=<?php echo $linha['nome_cliente']; ?>&tatuador=<?php echo $linha['tatuador']; ?>&data_sessao=<?php echo $linha['data_sessao']; ?>&hora_sessao=<?php echo $linha['hora_sessao']; ?>&tamanho_tatuagem=<?php echo $linha['tamanho_tatuagem']; ?>&cor=<?php echo $linha['cor']; ?>&infocont=<?php echo $linha['infocont']; ?>"><img src='assets/img/pencilok.png'></a></th>
		   <tr>
            			
			 <?php  } 
				echo "<center><a href=\"indexfunc.html\" class='nav__link'>VOLTAR</a></center>";
				echo "<br>";
			?>
</table>




          </div>
        </div>
      </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
      <div class="footer__container bd-grid">
        <div class="footer__content">
          <a href="#" class="footer__logo">Heart Tattoo</a>
          <span class="footer__description">Art Studio</span>
          <div>
            <a href="#" class="footer__social"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a href="#" class="footer__social"
              ><i class="bx bxl-instagram"></i
            ></a>
            <a href="#" class="footer__social"
              ><i class="bx bxl-twitter"></i
            ></a>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Serviços</h3>
          <ul>
            <li><a href="#" class="footer__link">Design</a></li>
            <li><a href="#" class="footer__link">Tatuagem</a></li>
            <li><a href="#" class="footer__link">Piercing</a></li>
            <li><a href="#" class="footer__link">Remoção</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Informações</h3>
          <ul>
            <li><a href="#" class="footer__link">Flash Tattoo</a></li>
            <li><a href="#" class="footer__link">Entre em contato</a></li>
            <li><a href="#" class="footer__link">Política de Privacidade</a></li>
            <li><a href="#" class="footer__link">Termos de Serviço</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Contato</h3>
          <ul>
            <li><a href="#" class="footer__link">Santo André - SP</a></li>
            <li><a href="#" class="footer__link">Rua Senador Flaquer, 841</a></li>
            <li><a href="#" class="footer__link">(11) 2992-9922</a></li>
            <li><a href="#" class="footer__link">heartstudioart@email.com</a></li>
          </ul>
        </div>
      </div>

      
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
  </html>