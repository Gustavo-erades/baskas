<nav id="sidebar">
    <div id="sidebar_content">
        <ul id="side_items">
            <li class="side-item" id="navCards">
                <a href="<?=$_SERVER["PHP_SELF"]."?cod=adm-0"?>">
                    <i class="fa-regular fa-address-card"></i>
                    <span class="item-description">
                        Cards
                    </span>
                </a>
            </li>
            <li class="side-item" id="navTitulos">
                <a href="<?=$_SERVER["PHP_SELF"]."?cod=adm-1"?>">
                    <i class="fa-solid fa-trophy"></i>
                    <span class="item-description">
                        Títulos
                    </span>
                </a>
            </li>
            <li class="side-item">
                <a href="<?=$_SERVER["PHP_SELF"]."?cod=adm-3"?>">
                    <i class="fa-solid fa-plus-minus"></i>
                    <span class="item-description">
                        Novo card
                    </span>
                </a>
            </li>
        </ul>
        <button id="open_btn">
            <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
    <div id="logout">
        <button id="logout_btn">
            <a href="../app/helpers/encerraSessao.php" id="linkLogout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Sair
                </span>
            </a>
        </button>
    </div>
</nav>
<script src="./assets/scripts/consultaMenu.js"></script>