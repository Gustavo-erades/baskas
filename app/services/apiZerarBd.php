<?php
require_once("../database/conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['zerarBd'])) {
    $bd = $_POST['zerarBd'];

    $sql = 'TRUNCATE TABLE bd_baskas.'.$bd.'';
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo 'Erro na preparação da declaração SQL: ' . mysqli_error($conn);
    } else {
        $result = mysqli_stmt_execute($stmt);

        if ($result === false) {
            echo 'Erro na execução da declaração SQL: ' . mysqli_stmt_error($stmt);
        } else {
            echo "banco de dados zerado com sucesso!";
        }
        mysqli_stmt_close($stmt);
    }
    $conn->close();
} else {
    echo "Banco de dados a ser zerado não enviado";
}
