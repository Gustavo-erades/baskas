<?php
function listaCardsUser()
{
    include_once("../app/database/conexao.php");
    $sql = "SELECT * FROM bd_baskas.jogadores ORDER BY elo DESC;";
    $result = mysqli_query($conn, $sql);
    while ($card = mysqli_fetch_array($result)) {
?>
        <div class='cards_jogadores'>
            <form id='formCard' action='../app/helpers/alterarAttr.php' method='POST'>
                <div class='card'>
                    <div class='row'>
                        <div class='col-lg-4'>
                            <img src='./assets/images/imgTeste.jpeg' class='card-image-top image-fluid rounded-start' width='100%' height='100%' id='imagem-tela-grande'>
                            <img src='./assets/images/imgTeste.jpeg' class='card-image-top image-fluid rounded-top' width='100%' height='100%' id='imagem-tela-pequena'>
                        </div>
                        <div class='col-lg-8'>
                            <div class='card-body'>
                                <h5 class='card-title nomeJogador'>
                                    <?= $card['nome'] ?>
                                </h5>
                                <ul class='ulAttr'>
                                    <li class='liAttr'>
                                        <h6>Passe</h6>
                                        <h5><?= $card['passe'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Rebot</h6>
                                        <h5><?= $card['rebot'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Shot</h6>
                                        <h5><?= $card['shot'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Shot 3</h6>
                                        <h5><?= $card['shot3'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Infilt</h6>
                                        <h5><?= $card['infilt'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Bandj</h6>
                                        <h5><?= $card['bandj'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Contr</h6>
                                        <h5><?= $card['contr'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Toco</h6>
                                        <h5><?= $card['toco'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Roubo</h6>
                                        <h5><?= $card['roubo'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Força</h6>
                                        <h5><?= $card['forca'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Velo</h6>
                                        <h5><?= $card['velo'] ?></h5>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Def</h6>
                                        <h5><?= $card['def'] ?></h5>
                                    </li>
                                </ul>
                                <hr>
                                <div class='row'>
                                    <ul class='col-12 col-lg-6 ulAttr attrFinais'>
                                        <li>Visão <br>
                                            <h5><?= $card['visao'] ?></h5>
                                        </li>
                                        <li>Clutch <br>
                                            <h5><?= $card['clutch'] ?></h5>
                                        </li>
                                        <li>Decisão <br>
                                            <h5><?= $card['decisao'] ?></h5>
                                        </li>
                                    </ul>
                                    <div class='col-12 col-lg-6 divEloCard'>
                                        <span class='eloCard'>
                                            <h4 class='numElo' style='color: #3e0d01;'>
                                                <?= $card['elo'] ?>
                                            </h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="divHistorico">
                                    <label for="hist">hist</label>
                                    <h5><?= $card['historico'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='mt-2 mb-4'>
                    <button class='btn btn-link' id='<?= $card['nome'] ?>' type='button' name='salvarAttr' value=<?= $card['nome'] ?> onclick="apiResponseCards('<?= $card['nome'] ?>')">
                        histórico
                    </button>
                    <button class='btn btn-link' type='button' onclick="apiResponseTitulo('<?= $card['nome'] ?>')">
                        títulos
                    </button>
                </div>
            </form>
        </div>
        <!-- histórico -->
        <div id="divDialog">
            <dialog id="responseCard<?= $card['nome'] ?>" class="bg-dark">
                <div width="100vh">
                    <canvas id="teste<?= $card['nome'] ?>"></canvas>
                </div>
                <table class="table table-dark table-hover tabelaHistGraf">
                    <thead>
                        <th>Histórico</th>
                        <th>Data</th>
                    </thead>
                    <tbody id="response<?= $card['nome'] ?>">
                    </tbody>
                </table>
                <div>
                    <button type="button" class="btn btn-link" data-target="responseCard<?= $card['nome'] ?>" id="fecharModal">
                        <a>fechar</a>
                    </button>
                </div>
            </dialog>
        </div>
        <!-- títulos -->
        <dialog id="dialogTitulo" class="bg-dark">
            <table class="table table-dark table-hover">
                <thead>
                    <th>Título</th>
                    <th>Dia</th>
                </thead>
                <tbody id="responseTitulo">
                </tbody>
            </table>
            <div>
                <button type="button" class="btn btn-link" data-target="dialogTitulo" id="fecharModal" data-target="dialog  Titulo">
                    <a>fechar</a>
                </button>
            </div>
        </dialog>
        <link rel="stylesheet" href="./assets/styles/styleDialog.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="./assets/scripts/apiResponseCards.js"></script>
        <script src="./assets/scripts/apiResponseTitulo.js"></script>
        <script src="./assets/scripts/fecharModal.js"></script>
<?php
    }
}
