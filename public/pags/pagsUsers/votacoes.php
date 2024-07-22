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
    <link rel="stylesheet" href="./assets/styles/styleVotUser.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="./assets/scripts/loading.js" defer></script>
    <title>Baskas-Votacoes</title>
</head>
<body onload="apiResponseVotNomes('criarOptions')">
    <div id="conteudoPag">
        <div class="container">
            <div id="votacoes">
                <div class="card">
                    <div class="card-header">
                        votação jogo dia 00/00/00
                    </div>
                    <form class="card-body">
                        <div>
                            <h5 class="card-title">Quem merece o título de MVP</h5>
                            <div>
                                <select class="form-select form-select-md mb-3" id="selectVotMvp">
                                </select>
                            </div>
                        </div>
                        <div>
                            <h5 class="card-title">Quem merece o título de MIP</h5>
                            <div>
                                <select class="form-select form-select-md mb-3" id="selectVotMip">
                                </select>
                            </div>
                        </div>
                        <div>
                            <h5 class="card-title">Quem merece o título de Bagre</h5>
                            <div>
                                <select class="form-select form-select-md mb-3" id="selectVotBagre">
                                </select>
                            </div>
                        </div>
                        <div>
                            <h5 class="card-title">Nome</h5>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </form>
                    <button class="btn">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
       
    </div>
    <script src="./assets/scripts/loadingPags.js"></script>
    <script src="./assets/scripts/apiResponseVotNomes.js"></script>
</body>

</html>