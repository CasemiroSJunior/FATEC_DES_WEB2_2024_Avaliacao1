<?php
$serverConfig = require '../Auth/userTypeValidation.php';
$serverConfig . startSession();
if ($serverConfig . getPermission() == "1") {
    header("location: /prova/FATEC_DES_WEB2_2024_Avaliacao1/web/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Tecnicos</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body class="p-4 flex " style="justify-content: center; align-items: center;background-color: #8e8e8e;">
    <form action="./requestEspecifica.php" method="POST">
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <h1>Menu Tecnicos</h1>
            <div class="p-2">
                <div class="p-2" style="font-size: larger">
                    <label for="cursos">Curso:</label>
                    <br>
                    <select name="cursos" id="cursos" style="width: 10%;">
                        <option value="GE">GE</option>
                        <option value="DSM">DSM</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Ver solicitações deste curso</button>
                <a class="btn btn-primary p-2" href="./requestGeral.php">Verificar todas as solicitações</a>
    
            </div>
            <div class="p-2">
                <a class="btn btn-danger p-2" href="../Auth/logout.php">Logout</a>
            </div>
        </div>
    </form>
</body>

</html>