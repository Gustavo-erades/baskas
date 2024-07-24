<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['opcao'])) {
    $opcao = $_POST['opcao'];
    echo "oi"; //retorno do php
} else {
    echo "Nenhuma opção foi selecionada.";
}
