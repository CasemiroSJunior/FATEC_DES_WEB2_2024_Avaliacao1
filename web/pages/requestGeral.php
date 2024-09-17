<?php
$serverConfig = require '../Auth/userTypeValidation.php';
$serverConfig . startSession();
$cursos = ['GE', 'DSM'];
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
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <?php
            foreach($cursos as $curso){
                echo "<h1>Solicitações de ". $curso . "</h1>";
                if($curso == 'GE'){
                    if(file_exists("ge.txt")){
                        $file = fopen("ge.txt", "r");
                        while(!feof($file)){
                            echo fgets($file). "<br>";
                        }
                        fclose($file);
                    }
                } else if($curso == 'DSM'){
                    if(file_exists("dsm.txt")){
                        $file = fopen("dsm.txt", "r");
                        while(!feof($file)){
                            echo fgets($file). "<br>";
                        }
                        fclose($file);
                    }
                }
                if(!isset($file) || $file == false){
                    echo "<h2>Nenhuma solicitação encontrada de </h2>". $curso;
                }
                
            }
            ?>
        </div>
    </form>
</body>

</html>