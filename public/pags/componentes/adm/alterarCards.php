<div class="container">
    <?php
    include_once("pesquisaJogador.html");
    ?>
    <div class="cards_jogadores">
        <form action="../app/helpers/alterarAttr.php" method="GET">
            <div class="card">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./assets/images/imgTeste.jpeg" class="card-image-top image-fluid rounded-start" width="100%" height="100%" id="imagem-tela-grande">
                        <img src="./assets/images/imgTeste.jpeg" class="card-image-top image-fluid rounded-top" width="100%" height="100%" id="imagem-tela-pequena">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title nomeJogador">Nome</h5>
                            <ul class="ulAttr">
                                <li class="liAttr">
                                    <h6>Passe</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="passe">
                                </li>
                                <li class="liAttr">
                                    <h6>Rebot</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="rebot">
                                </li>
                                <li class="liAttr">
                                    <h6>Shot</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="shot">
                                </li>
                                <li class="liAttr">
                                    <h6>Shot 3</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="shot3">
                                </li>
                                <li class="liAttr">
                                    <h6>Infilt</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="infilt">
                                </li>
                                <li class="liAttr">
                                    <h6>Bandj</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="bandj">
                                </li>
                                <li class="liAttr">
                                    <h6>Contr</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="contr">
                                </li>
                                <li class="liAttr">
                                    <h6>Toco</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="toco">
                                </li>
                                <li class="liAttr">
                                    <h6>Roubo</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="roubo">
                                </li>
                                <li class="liAttr">
                                    <h6>Força</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="forca">
                                </li>
                                <li class="liAttr">
                                    <h6>Velo</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="velo">
                                </li>
                                <li class="liAttr">
                                    <h6>Def</h6>
                                    <input type="number" min=50 max=100 class="inputCard" value=50 required name="def">
                                </li>
                            </ul>
                            <hr>
                            <div class="row">
                                <ul class="col-12 col-lg-6 ulAttr attrFinais">
                                    <li>Visão
                                        <input type="number" min=50 max=100 class="inputCard" value=50 required name="visao">
                                    </li>
                                    <li>Clutch
                                        <input type="number" min=50 max=100 class="inputCard" value=50 required name="clutch">
                                    </li>
                                    <li>Decisão
                                        <input type="number" min=50 max=100 class="inputCard" value=50 required name="decisao">
                                    </li>
                                </ul>
                                <div class="col-12 col-lg-6 divEloCard">
                                    <span class="eloCard">
                                        <h4 class="numElo" style="color: #3e0d01;">
                                            <?php echo (isset($_GET["med"])?$_GET["med"]:"??") ?>
                                        </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button class="btn btn-link" id="alterarCard" type="submit" name="salvarAttr">
                    salvar
                </button>
            </div>
        </form>
    </div>
</div>