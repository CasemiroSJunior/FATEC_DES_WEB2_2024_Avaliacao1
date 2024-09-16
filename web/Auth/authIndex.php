<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /prova/FATEC_DES_WEB2_2024_Avaliacao1/index.php");
    exit;
}

?>