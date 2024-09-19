<?php

if($_SERVER["REQUEST_METHOD"] == "POST" & isset($_POST["selectorDeDados"])) {
    $cantidadDeDados = $_POST["selectorDeDados"];
    $numerosRandom = [];
    $rutaDeLosDados = [];
    $suma = 0;

    for ($i=0; $i < $cantidadDeDados; $i++) {
        $numerosRandom[$i] =  random_int(1,6);
        $suma += $numerosRandom[$i];
        //echo $numerosRandom[$i] . "<br>";
    }


    for ($i=0; $i < $cantidadDeDados; $i++) {
        switch ($numerosRandom[$i]){
            case 1:
                $rutaDeLosDados[$i] = "imgDados/1.avif";
                break;
            case 2:
                $rutaDeLosDados[$i] = "imgDados/2.avif";
                break;
            case 3:
                $rutaDeLosDados[$i] = "imgDados/3.avif";
                break;
            case 4:
                $rutaDeLosDados[$i] = "imgDados/4.avif";
                break;
            case 5:
                $rutaDeLosDados[$i] = "imgDados/5.avif";
                break;
            case 6:
                $rutaDeLosDados[$i] = "imgDados/6.avif";
                break;
        }
    }




}





?>












<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 11</title>
</head>
<body>
    <?php include ("../ejercicio8/header.php")?>
    <section class="ejercicio">
            <p>Dados lanzados: <?php echo $cantidadDeDados?></p>
        <section style="margin: 1em; width: 100%; display: grid; grid-template-columns: repeat(6,1fr);"">
            <?php
            for ($i=0; $i < $cantidadDeDados; $i++) {
                echo '<div>
                        <img src="' . $rutaDeLosDados[$i] . '" alt="cara_dado" style="width: 100px">
                      </div>';
            }
            ?>
        </section>
        <?php echo "<p>La suma de los dados es: " . $suma . "</p><br>";?>
    </section>
        <?php include ("../ejercicio8/footer.php")?>
</body>
</html>

