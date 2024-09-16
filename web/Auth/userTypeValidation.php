<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == 'coordenacao' and $_POST['password'] == 'coordenacao' || $_SESSION['username'] == 'coordenacao') {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = 'coordenacao';
        header("location: ./pages/menuCoord.php");
    } else if ($_POST['username'] == 'tecnicos' and $_POST['password'] == 'tecnicos' || $_SESSION['username'] == 'tecnicos' ) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = 'tecnicos';
        header("location: ./pages/menuTec.php");
    } else {
        echo "<script>alert('Usuário ou senha incorretos!')</script>";
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            header("location: /prova/FATEC_DES_WEB2_2024_Avaliacao1/web/index.php");
            exit;
        }
    }
}
