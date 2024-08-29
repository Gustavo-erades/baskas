<a class="btn abrirVot" id="lancarVotacao" onclick="apiAbrirVotacaoAdm()">
    Abrir votação
</a>
<a class="btn fecharVot" id="lancarVotacao" style="display: none;" onclick="apiFecharVotacaoAdm()">
    Fechar votação
</a>
<div class="divVotAdm">
    <h3 id="diaVotos">
        <span id="dia"></span>
    </h3>
    <h3 id="contagemVotos">
        <span id="numVotos"></span> votos
    </h3>
    <div class="row">
        <!-- mvp -->
        <div class="col-12 col-md-4">
            <div class="divVotTitulo">
                <span id="votTitulo">
                    <h3>MVP</h3>
                </span>
                <h4>mais votado (<span id="quantVotMvp"></span>) : <span id="nomeVotMvp">nome</span></h4>
                <button class="btn btn-link" id="Mvp" onclick="apiResponseVotDialog(this)">mais votos</button>
            </div>
            <div style="width:450px">
                <canvas id="grafMvp"></canvas>
            </div>
        </div>
        <!-- mip -->
        <div class="col-12 col-md-4">
            <div class="divVotTitulo">
                <span id="votTitulo">
                    <h3>MIP</h3>
                </span>
                <h4>mais votado (<span id="quantVotMip"></span>) : <span id="nomeVotMip">nome</span></h4>
                <button class="btn btn-link" id="Mip" onclick="apiResponseVotDialog(this)">mais votos</button>
            </div>
            <div style="width:450px">
                <canvas id="grafMip"></canvas>
            </div>
        </div>
        <!-- Bagre -->
        <div class="col-12 col-md-4">
            <div class="divVotTitulo">
                <span id="votTitulo">
                    <h3>Bagre</h3>
                </span>
                <h4>mais votado (<span id="quantVotBagre"></span>) : <span id="nomeVotBagre">nome</span></h4>
                <button class="btn btn-link" id="Bagre" onclick="apiResponseVotDialog(this)">mais votos</button>
            </div>
            <div style="width:450px">
                <canvas id="grafBagre"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- modal de mais votos -->
<div id="divDialog">
    <dialog id="dialogVotMvp" class="bg-dark">
        <table class="table table-dark table-hover">
            <thead>
                <th>Nome</th>
                <th>Quant. votos</th>
            </thead>
            <tbody id="responseVotMvp">
            </tbody>
        </table>
        <div>
            <button type="button" class="btn btn-link" data-target="dialogVotMvp" id="fecharModal" data-target="dialogVotMvp">
                <a>fechar</a>
            </button>
        </div>
    </dialog>

    <dialog id="dialogVotMip" class="bg-dark">
        <table class="table table-dark table-hover">
            <thead>
                <th>Nome</th>
                <th>Quant. votos</th>
            </thead>
            <tbody id="responseVotMip">
            </tbody>
        </table>
        <div>
            <button type="button" class="btn btn-link" data-target="dialogVotMip" id="fecharModal" data-target="dialogVotMip">
                <a>fechar</a>
            </button>
        </div>
    </dialog>

    <dialog id="dialogVotBagre" class="bg-dark">
        <table class="table table-dark table-hover">
            <thead>
                <th>Nome</th>
                <th>Quant. votos</th>
            </thead>
            <tbody id="responseVotBagre">
            </tbody>
        </table>
        <div>
            <button type="button" class="btn btn-link" data-target="dialogVotBagre" id="fecharModal" data-target="dialogVotBagre">
                <a>fechar</a>
            </button>
        </div>
    </dialog>
</div>
<link rel="stylesheet" href="./assets/styles/styleDialog.css">
<script src="./assets/scripts/apiResponseVot.js"></script>
<script src="./assets/scripts/apiResponseDiaVot.js"></script>
<script src="./assets/scripts/apiResponseVotDialog2.js"></script>
<script src="./assets/scripts/fecharModal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./assets/scripts/apiDadosGrafs.js"></script>
<script src="./assets/scripts/grafsVotos.js"></script>
<script src="./assets/scripts/apiAbrirVotacaoAdm.js"></script>
<script src="./assets/scripts/atualizaDadosVot.js"></script>