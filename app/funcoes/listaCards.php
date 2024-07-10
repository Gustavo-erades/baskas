<?php
function listaCards()
{
    include_once("../app/database/conexao.php");
    $sql = "SELECT * FROM bd_baskas.jogadores WHERE elo>50 ORDER BY nome;";
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
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['passe'] ?> required name='passe'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Rebot</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['rebot'] ?> required name='rebot'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Shot</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['shot'] ?> required name='shot'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Shot 3</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['shot3'] ?> required name='shot3'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Infilt</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['infilt'] ?> required name='infilt'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Bandj</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['bandj'] ?> required name='bandj'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Contr</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['contr'] ?> required name='contr'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Toco</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['toco'] ?> required name='toco'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Roubo</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['roubo'] ?> required name='roubo'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Força</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['forca'] ?> required name='forca'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Velo</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['velo'] ?> required name='velo'>
                                    </li>
                                    <li class='liAttr'>
                                        <h6>Def</h6>
                                        <input type='number' min=50 max=100 class='inputCard' value=<?= $card['def'] ?> required name='def'>
                                    </li>
                                </ul>
                                <hr>
                                <div class='row'>
                                    <ul class='col-12 col-lg-6 ulAttr attrFinais'>
                                        <li>Visão <br>
                                            <input type='number' min=50 max=100 class='inputCard' value=<?= $card['visao'] ?> required name='visao'>
                                        </li>
                                        <li>Clutch <br>
                                            <input type='number' min=50 max=100 class='inputCard' value=<?= $card['clutch'] ?> required name='clutch'>
                                        </li>
                                        <li>Decisão <br>
                                            <input type='number' min=50 max=100 class='inputCard' value=<?= $card['decisao'] ?> required name='decisao'>
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
                                    <input type='number' class='inputCard' value=<?= $card['historico'] ?> name='historico' id="hist" style="width:70px;" min=50 step="0.1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='mt-2 mb-4'>
                    <button class='btn btn-link' id='alterarCard' type='submit' name='salvarAttr' value=<?= $card['nome'] ?>>
                        salvar
                    </button>
                    <button class='btn btn-link' id='<?= $card['nome'] ?>' type='button' name='salvarAttr' value=<?= $card['nome'] ?> onclick="apiResponseCards('<?= $card['nome'] ?>')">
                        histórico
                    </button>
                </div>
            </form>
        </div>
        <div id="divDialog">

            <dialog id="responseCard<?= $card['nome'] ?>" class="bg-dark" style="border-radius:8px;border:none;padding-right:5px;padding-top:5px;padding-bottom:5px;margin-left:1rem;margin-top:1rem;box-shadow:0 0 1em rgb(0 0 0 / .5);margin-left:25vh;margin-top:25vh;">
                <table class="table table-dark table-hover">
                    <thead style="text-align:center">
                        <th>Histórico</th>
                        <th>Data</th>
                    </thead>
                    <tbody id="response<?= $card['nome'] ?>" style="text-align:center">
                    </tbody>
                </table>
                <div style="text-align:center">
                    <button type="button" class="btn btn-link" onclick="fecharModal()" value="<?=$card['nome']?>" id="nome">
                        <a>fechar</a>
                    </button>
                </div>
            </dialog>
        </div>
        <script src="./assets/scripts/apiResponseCards.js"></script>
        <script>
            function fecharModal() {
                const nome=document.querySelector("#nome").value;
                console.log(nome)
                const dialogResponse = document.querySelector('#responseCard' + nome);
                console.log(dialogResponse)
                dialogResponse.close();
            }
        </script>
<?php
    }
}
