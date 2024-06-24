<nav>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=$_SERVER["PHP_SELF"]."?cod=user-0"?>" id="linkHome">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Baskas</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#votacoes">Votações</a></li>
                <li><a class="dropdown-item" href="#divMVP">MVP</a></li>
                <li><a class="dropdown-item" href="#divBagre">Bagre</a></li>
                <li><a class="dropdown-item" href="#divEvolucao">+Evolução</a></li>
                <li><a class="dropdown-item" href="#procuraJogador">Jogadores</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Drive</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=$_SERVER["PHP_SELF"]."?cod=user-1"?>" id="linkAdm">Adm</a>
        </li>
    </ul>
</nav>