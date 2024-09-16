<?php
require '../Auth/userTypeValidation.php';
/* require '../Auth/auth.php'; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu coordenação</title>
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
    <form action="requestRegister.php" method="POST">
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <h1>Menu Coordenação</h1>

            <div class="p-2" style="font-size: larger">
                <label for="labs">Laboratório:</label>
                <br>
                <select name="labs" id="laboratorio">
                    <option value="Laboratório 01">Laboratório 01</option>
                    <option value="Laboratório 02">Laboratório 02</option>
                    <option value="Laboratório 03">Laboratório 03</option>
                    <option value="LAboratório 04">LAboratório 04</option>
                </select>
            </div>
            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="date"
                    class="form-control"
                    id="timelimite"
                    name="timelimite"
                    placeholder="dd/MM/aaaa" />
                <label for="timelimite">Prazo limite</label>
            </div>

            <div class="form-floating p-2" style="width: 50%;">
                <input
                    type="text"
                    class="form-control"
                    id="request"
                    name="request"
                    placeholder="Instalar vscode..." />
                <label for="request">Solicitação</label>
            </div>

            <div class="p-2" style="font-size: larger">
                <label for="cursos">Curso:</label>
                <br>
                <select name="cursos" id="cursos" style="width: 10%;">
                    <option value="GE">GE</option>
                    <option value="DSM">DSM</option>
                </select>
            </div>
            
            <div class="p-2">
                <button type="submit" class="btn btn-success p-2">Enviar</button>
                <button class="btn btn-danger p-2" href="../Auth/logout.php">Logout</button>
            </div>
        </div>
    </form>
</body>

</html>