<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="#ff2f00">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="./assets/icones/iconePagina.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/styles/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <script src="./assets/scripts/trocarClasseMenuUser.js" defer></script>
  <title>Baskas-Home</title>
</head>
<body>
  <?php
  //barra de navegação
  include_once("./pags/componentes/users/menu.php");
  ?>
  <div class="container">
    <?php
    //titulo
    include_once("./pags/componentes/titulo.html");
    ?>
    <p>administração</p>
    <!-- credenciais -->
    <div id="votacoes">
      <div class="card">
        <div class="card-header">
          Credenciais - ADM's
        </div>
        <div class="card-body">
          <h5 class="card-title">Insira abaixo sua credencial e acesse o painel administrativo</h5>
          <div>
            <form action="../app/helpers/validaLogin.php">
              <div style="margin:20px 0;">
                <input type="password" class="form-control" width="100%" id="inputCredAdm">
              </div>
              <button class="btn" type="submit" id="buttonCredAdm">
                Acessar painel
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    //titulo
    include_once("./pags/componentes/footer.html");
    ?>
  </div>
</body>