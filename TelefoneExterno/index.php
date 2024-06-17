<!DOCTYPE html>

<head>
  <meta charst="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Lista Telefonica PMF</title>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="icon" type="image/png" href="imgs/brasao.png">
</head>

<body>
  <header>
    
    <img src="imgs/logoPmf.png" alt="PMF" class="logo" />
    <nav>
      <div class="nav-list">
        <ul>
          <li class="nav-item"><a href="direta.php" id="botaoAdminDireta">Serviços Públicos</a></li>
          <li class="nav-item"><a href="secretaria.php">Secretarias</a></li>
          <li class="nav-item"><a href="conselho.php">Conselhos</a></li>
          <li class="nav-item"><a href="fundacaoAutarquia.php">Fundação e Autarquias</a></li>
        </ul>
      </div>

      <div class="mobile-menu-icon">
        <button><img class="icon" src="imgs/iconhamburger"></button>
      </div>

    </nav>

    <div class="menu-mobile">
      <ul>
        <li class="nav-item"><a href="direta.php" id="botaoAdminDireta">Serviços Públicos</a></li>
        <li class="nav-item"><a href="secretaria.php">Secretarias</a></li>
        <li class="nav-item"><a href="conselho.php">Conselhos</a></li>
        <li class="nav-item"><a href="fundacaoAutarquia.php">Fundação e Autarquias</a></li>
      <ul>  
    </div>

    <div class="input-container">
      <input type="text" id="pesquisa" placeholder="Pesquisar Setor" />
      <span class="material-symbols-outlined">search</span>
    </div>
  </header>
  <main>
    <div class="divCentro">
      
        <img src="imgs/centro.png" alt="Centro" id="imgFundo">
        <div class="divInicial">
          <h1 class="h1-Inicial" disabled>Lista de Contatos</h1>
          <h2 class="h2-Inicial">Prefeitura de Florianópolis</h2>
          <div class="brs">
          <br /><br /><br />
          </div>
          <h3 class="h3-Inicial">Principais Serviços</h3>
          <div>
            <button id="botaoPmf" class="button-Inicial">Serviços Gerais</button>
            <button id="botaoProCidadao" class="button-Inicial">Pró-Cidadão</button>
            <button id="botaoOuvidoria" class="button-Inicial">Ouvidoria</button>
          </div>
        </div>
      
    </div>

    <!-- Modal Serviços Gerais -->
    <div id="modalPmf" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3 class="h3-Modal2">Serviços Gerais</h3>
        <p class="p-Modal2">Rua Conselheiro Mafra, n&deg;656</p>
        <p class="p-Modal2">CEP 88010-102</p>
        <p class="p-Modal2">Atendimento:8h às 18h</p>
        <p class="p-Modal2"><b>(48) 3251-5900</b></p>
      </div>
    </div>

    <!-- Modal Pró-Cidadão -->
    <div id="modalProCidadao" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3 class="h3-Modal2">Unidades de Atendimento</h3>
        <p class="p-Modal2"><b>Unidade Central</b></p>
        <p class="p-Modal2">Rua João Pinto, nº 156 - Centro</p>
        <p class="p-Modal2"><b>0800 000 0844</b></p>
        <!-- <hr class="hr" />
        <p class="p-Modal2"><b>Nome</b></p>
        <p class="p-Modal2">Endereço</p>
        <p class="p-Modal2"><b>(48) XXXX-XXXX</b></p>
        <hr class="hr" />
        <p class="p-Modal2"><b>Nome</b></p>
        <p class="p-Modal2">Endereço</p>
        <p class="p-Modal2"><b>(48) XXXX-XXXX</b></p>
        <hr class="hr" /> -->
      </div> 
    </div>

    <!-- Modal Ouvidoria -->
    <div id="modalOuvidoria" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3 class="h3-Modal2">Ouvidoria e Serviço de Informações ao Cidadão</h3>
        <p class="p-Modal2">Rua João Pinto, n&deg;156 - 1&deg; andar</p>
        <p class="p-Modal2">CEP 88010-6533</p>
        <p class="p-Modal2">Atendimento:10h às 12h e 13h às 18h</p>
        <p class="p-Modal2"><b>0800 234 1777</b></p>
      </div>
    </div>
  </main>
  <script src="js/modal.js"></script>
</body>