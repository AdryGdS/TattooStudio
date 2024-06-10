<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--========== CAIXA ICONES ==========-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Alteração Agendamento</title>
  </head>
  <body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
    <nav class="nav bd-container">
    <a href="login.html" class="nav__logo">Login</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">Sobre</a>
            </li>
            <li class="nav__item">
              <a href="#menu" class="nav__link">Portfolio</a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link">Agende</a>
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
      <!--========== AGENDE ==========-->
      <section class="contact section bd-container" id="contact">
        <div class="contact__container bd-grid">
            <form class="cadastro" name="form1" method="post">
              <div class="form">
              <label for="nome" id="label">NOME: </label>
              <input type="text" name="txt_cliente" size="80" id="nome" value="<?php if (isset($_GET['alterar'])) echo $_GET['alterar'] ?>" readonly><br><br>

              <label for="tatuador" id="label">ARTISTA: </label>&nbsp;
              <select name="txt_tatuador" id="tatuador"value="<?php if (isset($_GET['alterar'])) echo $_GET['tatuador'] ?>">
                <option value="">- Selecionar tatuador -</option>
                <option value="Moquidesia">Moquidesia</option>
                <option value="Lindolfo">Lindolfo</option>
                <option value="Gorethe">Gorethe</option>
                <option value="Vitor_Pereira">Vitor Pereira</option></select
              >&nbsp;&nbsp;&nbsp;&nbsp;

              <label for="tamanho" id="label1">TAMANHO: </label>&nbsp;
              <select name="txt_tamanho_tatuagem" id="tamanho" value="<?php if (isset($_GET['alterar'])) echo $_GET['tamanho_tatuagem'] ?>">
                <option value="">- Selecionar tamanho -</option>
                <option value="10">5 a 10 cm</option>
                <option value="20">10 a 20 cm</option>
                <option value="30">20 a 30 cm</option>
                <option value="40">30 cm ou mais</option></select
              >&nbsp;&nbsp;&nbsp;&nbsp; <br><br>

              <label for="data" id="label">DATA: </label>&nbsp;
              <input type="date"name="txt_data_sessao"size="30" id="data" value="<?php if (isset($_GET['alterar'])) echo $_GET['data_sessao'] ?>">&nbsp;&nbsp;
              <label for="hora" id="label1">HORA: </label>&nbsp;
              <input type="time" name="txt_hora_sessao" size="30" id="hora" value="<?php if (isset($_GET['alterar'])) echo $_GET['hora_sessao'] ?>" >
              <br><br>
              <form name="Opcao_Cor" id="label">
                CORES: &nbsp;&nbsp;
                <input type="RADIO" name="txt_cor" value="1" /> P&B
                <input type="RADIO" name="txt_cor" value="2" /> Cor
              </form>&nbsp;&nbsp;
              <label for="infocont" id="label1">CONTATO: </label>
              <input type="text" name="txt_contato" size="80" id="infocont" value="<?php if (isset($_GET['alterar'])) echo $_GET['infocont'] ?>">
              <br><br><br>
              <input type="submit" value="Alterar" onclick="document.form1.action='./alterar.php'" id="contact__button" class="button">&nbsp;&nbsp;&nbsp;
              <input type="submit" value="Ver Agenda" onclick="document.form1.action='./listagem.php'" id="contact__button1" class="button">
              </div>
            </form>
            
      <h2 class="section-title">Altere <br> Agendamento</h2>
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

    <!--========== SCROLL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
  </html>