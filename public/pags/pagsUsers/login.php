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
  <link rel="stylesheet" href="./assets/styles/styleLogin.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <script src="./assets/scripts/trocarClasseMenuUser.js" defer></script>
  <title>Baskas-Home</title>
</head>
<body>
  <div id="conteudoPag">
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
              <form action="../app/helpers/validaLogin.php" method="POST">
                <div style="margin:20px 0;" class="input-group">
                  <button class="input-group-text" id="inputEye" type="button" onclick="openClosedEye()"><i id="iconeEye" class="fa-solid fa-eye-slash"></i></button>
                  <input type="password" class="form-control" width="100%" id="inputCredAdm" style="text-align: center;" name="inputCredAdm" required>
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
  </div>
  <script src="./assets/scripts/loadingPags.js"></script>
  <script src="./assets/scripts/eyeLogin.js"></script>
</body>