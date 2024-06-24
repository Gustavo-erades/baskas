<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/icones/iconePagina.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/styleSidebarAdm.css">
    <link rel="stylesheet" href="./assets/styles/styleAlterarCards.css">
    <link rel="shortcut icon" href="./assets/icones/iconePagina.png" type="image/x-icon">
    <title>Baskas-Painel administrativo</title>
    <style>
        #teste {
            display: none;
        }

        #load {
            display: block;
        }
    </style>
</head>

<body>
    <div id="teste">
        <?php
        include_once("./pags/componentes/adm/menuAdm.php");
        ?>
        <main id="mainContent">
            <?php
            include_once("./pags/componentes/adm/alterarCards.php");
            ?>
            <?php
            include_once("./pags/componentes/footer.html");
            ?>
        </main>
    </div>
    <div id="load" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;">
        <div style="align-items:center;justify-content:center;">
            <div style="padding-left:28px;margin-bottom:8px">
            <i class="fa-solid fa-basketball fa-bounce fa-2xl" style="color: #ff2f00;"></i>
            </div>
            
            <p style="color:#ff2f00;">carregando...</p>
        </div>
    </div>
    <script src="./assets/scripts/sideBarAdm.js"></script>
    <script src="./assets/scripts/loading.js"></script>
</body>

</html>