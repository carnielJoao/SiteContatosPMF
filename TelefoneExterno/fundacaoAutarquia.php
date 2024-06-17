<head>
  <meta charst="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Lista Telefonica PMF</title>
  <link rel="stylesheet" href="css/index.css"/>
  <link rel="stylesheet" href="css/cardsTelefones.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
  <link rel="icon" type="image/png" href="imgs/brasao.png">
</head>

<body>

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
  background-color: white; 
  color: #002f66;
  border-top: 1px solid #ccc;
  text-align: center;
  height: 35px;
}

Header {
  justify-content: center;
}
</style>
  
  <header>
    <a href="http://contatos.pmf.sc.gov.br">
      <img src="imgs/logoPmf.png" alt="PMF" class="logo" id="imgPmf"/>
    </a>
    <nav>
    <div class="nav-list">
        <ul>
          <li class="nav-item"><a href="direta.php" id="botaoAdminDireta">Serviços Públicos</a></li>
          <li class="nav-item"><a href="secretaria.php">Secretarias</a></li>
          <li class="nav-item"><a href="conselho.php">Conselhos</a></li>
          <li class="nav-item"><a href="fundacaoAutarquia.php">Fundação e Autarquias</a></li>
        </ul>
      </div>
    </nav>
    <!-- <div class="input-container">
      <input type="text" id="pesquisa" placeholder="Pesquisar Setor" />
      <span class="material-symbols-outlined">search</span>
    </div> -->
  </header>

  <h1>Fundação e Autarquias</h1>

  <section class="ajustSectionUm">
   
    <!-- Conselhos coluna 1 -->
    <?php include_once("php/fundauta1.php"); ?>

    <!-- Conselhos coluna 2 -->
    <?php include_once("php/fundauta2.php"); ?> 

  </section>

  <section class="sectionFooter">
    <footer>Desenvolvido pelo E-Gov</footer>
  </section>

  <script src="js/toggleDivs.js"></script>

</body>
