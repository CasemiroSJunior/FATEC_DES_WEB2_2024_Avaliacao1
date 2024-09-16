<?php 
    require '../Auth/userTypeValidation.php';
    $ano = (explode("-",$_POST['timelimite'])[0]);
    $mes = (explode("-",$_POST['timelimite'])[1]);
    $dia = (explode("-",$_POST['timelimite'])[2]);
    $lab = $_POST['labs'];
    $request = $_POST['request'];
    $curso = $_POST['cursos'];

    if($curso == "DSM"){
        $file = fopen("dsm.txt", "a");
        fwrite($file, $lab." | ". $dia."/".$mes."/".$ano. " | ".$request."\n");
    }
    if($curso == "GE"){
        $file = fopen("ge.txt", "a");
        fwrite($file, $lab." | ". $dia."/".$mes."/".$ano. " | ".$request."\n");
    }
    fflush($file);
    fclose($file);
    header("location: ./menuCoord.php");
?>