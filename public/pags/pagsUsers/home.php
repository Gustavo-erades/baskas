<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="#ff2f00">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="./assets/icones/iconePagina.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/styles/style.css">
  <link rel="stylesheet" href="./assets/styles/styleLoading.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <script src="./assets/scripts/trocarClasseMenuUser.js" defer></script>
  <script src="./assets/scripts/loading.js" defer></script>
  <title>Baskas-Home</title>
</head>
<body>
  <div id="conteudoPag">
    <?php
    //barra de navegação
    include_once("./pags/componentes/users/menu.php");
    ?>
    <!-- conteúdo-->
    <div class="container">
      <?php
      //titulo
      include_once("./pags/componentes/titulo.html");
      //baskas dessa semana
      include_once("./pags/componentes/titulosSemana/titulosSemana.html");
      //mvps
      include_once("./pags/componentes/titulosMes/mvpMes.html");
      //evolucao
      include_once("./pags/componentes/titulosMes/evolucaoMes.html");
      //bagre
      include_once("./pags/componentes/titulosMes/bagreMes.html");
      ?>

      <!-- votações -->
      <div id="votacoes">
        <h2>Votações abertas</h2>
        <div class="card">
          <div class="card-header">
            MVP do mês
          </div>
          <div class="card-body">
            <h5 class="card-title">Quem merece o título de MVP do mês de junho?</h5>
            <p class="card-text">Considerando todos os jogos que tivemos neste mês, acesse a pesquisa abaixo e vote no
              melhor jogador na sua opnião</p>
            <a href="#" class="btn">Acessar votação</a>
          </div>
        </div>
      </div>
      <?php
      //jogadores
      include_once("./pags/componentes/users/cards.php");
      //footer
      include_once("./pags/componentes/footer.html");
      ?>
    </div>
  </div>
  <script src="./assets/scripts/loadingPags.js"></script>
</body>
</html>