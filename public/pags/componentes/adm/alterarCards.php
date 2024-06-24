<div class="container">
    <?php
        include_once("pesquisaJogador.html");
    ?>
    <div class="cards_jogadores">
        <form class="card">
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
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Shot</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Shot 3</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Infilt</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Bandj</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Contrl</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Resist</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Roubo</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Força</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                            <li class="liAttr">
                                <h6>Defesa</h6>
                                <input type="number" min=50 max=100 class="inputCard" value=50>
                            </li>
                        </ul>
                        <hr>
                        <div class="row">
                            <ul class="col-12 col-lg-6 ulAttr attrFinais">
                                <li>Visão
                                    <input type="number" min=50 max=100 class="inputCard" value=50>
                                </li>
                                <li>Clutch
                                    <input type="number" min=50 max=100 class="inputCard" value=50>
                                </li>
                                <li>Decisão
                                    <input type="number" min=50 max=100 class="inputCard" value=50>
                                </li>
                            </ul>
                            <div class="col-12 col-lg-6 divEloCard">
                                <span class="eloCard">
                                    <h4 class="numElo" style="color: #3e0d01;">90</h4>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="mt-2">
            <button class="btn btn-link" id="alterarCard" type="submit">
                salvar
            </button>
        </div>
    </div>
</div>