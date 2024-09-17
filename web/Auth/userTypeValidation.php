<?php
function startSession(){
    session_start();
}

function login()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['username'] == 'coordenacao' and $_POST['password'] == 'coordenacao') {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = 'coordenacao';
            header("location: /prova/FATEC_DES_WEB2_2024_Avaliacao1/web/pages/menuCoord.php");
        } else if ($_POST['username'] == 'tecnicos' and $_POST['password'] == 'tecnicos') {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = 'tecnicos';
            header("location: /prova/FATEC_DES_WEB2_2024_Avaliacao1/web/pages/menuTec.php");
        }
    }
}

function getPermission()
{
    if(!isset($_SESSION['username'])){
        return false;
    } else
    if ($_SESSION['username'] == 'coordenacao') {
        return 'coordenacao';
    } else if ($_SESSION['username'] == 'tecnicos') {
        return 'tecnicos';
    } else {
        return false;
    }
}
