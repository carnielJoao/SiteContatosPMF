<head>
  <meta charst="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Lista Telefonica PMF</title>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/cardsTelefones.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="icon" type="image/png" href="imgs/brasao.png">
</head>

<style>
body {
  height: 100%;
}

.sectionFooter {
  width: 100%;
  margin-top: 55px
}

footer {
  width: 100%;
  height: 35px;
  background-color: white; 
  color: #002f66;
  border-top: 1px solid #ccc;
  text-align: center;
}

Header {
  justify-content: center;
}

.testeNAV {
  text-decoration: none;
  color: #002f66;
}

</style>

<body>

  <header>
    <a href="http://contatos.pmf.sc.gov.br">
      <img src="imgs/logoPmf.png" alt="PMF" class="logo" id="imgPmf"/>
    </a>
      <nav >
        <div class="nav-list">
        <a href="direta.php" id="botaoAdminDireta">Serviços Públicos</a>
        <a href="secretaria.php">Secretarias</a>
        <a href="conselho.php">Conselhos</a>
        <a href="fundacaoAutarquia.php">Fundação e Autarquias</a>
        </div>
      </nav>
      <!-- <div class="input-container">
        <input type="text" id="pesquisa" placeholder="Pesquisar Setor" />
        <span class="material-symbols-outlined">search</span>
      </div> -->
  </header>

  <h1>Serviços Públicos</h1>

  <section class="ajustSectionUm">
    
    <!-- Educação -->
    <?php include_once("php/direta1.php"); ?>

    <!--saude -->
    <?php include_once("php/direta2.php"); ?>

  </section>

  <section class="sectionFooter">
    <footer>Desenvolvido pelo E-Gov</footer>
  </section>

  <script src="js/toggleDivs.js"></script>

</body>