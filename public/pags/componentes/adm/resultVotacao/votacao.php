<a class="btn" id="lancarVotacao">
    Lançar votação
</a>
<script src="./assets/scripts/apiResponseVot.js"></script>
<div>
    <h3 id="contagemVotos">
        <span id="numVotos"></span> votos
    </h3>
    <!-- mvp -->
    <div class="divVotTitulo">
        <span id="votTitulo">
            <h3>MVP</h3>
        </span>
        <h4>mais votado (<span id="quantVotMvp"></span>) : <span id="nomeVotMvp">nome</span></h4>
        <button class="btn btn-link">mais votos</button>
    </div>
    <!-- mip -->
    <div class="divVotTitulo">
        <span id="votTitulo">
            <h3>MIP</h3>
        </span>
        <h4>mais votado (<span id="quantVotMip"></span>) : <span id="nomeVotMip">nome</span></h4>
        <button class="btn btn-link">mais votos</button>
    </div>
    <!-- Bagre -->
    <div class="divVotTitulo">
        <span id="votTitulo">
            <h3>Bagre</h3>
        </span>
        <h4>mais votado (<span id="quantVotBagre"></span>) : <span id="nomeVotBagre">nome</span></h4>
        <button class="btn btn-link">mais votos</button>
    </div>
</div>
<!-- modal de mais votos 
<div id="divDialog">
    <dialog id="responseCard<?= $card['nome'] ?>" class="bg-dark">
        <table class="table table-dark table-hover">
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
-->