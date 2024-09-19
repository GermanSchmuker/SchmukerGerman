<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 5</title>
</head>
<body style="background-color: #b3b3b3">
<?php include ("../ejercicio8/header.php")?>

<section class="ejercicio">
    <p class="titulo_ejercicio">EJERCICIO 5: SUMATORIA</p>
    <p class="consigna">CONSIGNA: Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
        valores.
        a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
        b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
        c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
    </p>
    <p>
        <?php
        require_once("../ejercicio5/ejercicio5.php");

        echo  "<br>" . "-Valor a pasar (1,9,5,4,6,4) y la sumatoria_a del array es: " . sumatoria_a(array(1,9,5,4,6,4)) . "<br>";
        echo "-Valor a pasar (1,9,5,4,6,4) y la sumatoria_b del array es: " . sumatoria_b(array(1,9,5,4,6,4)) . "<br>";
        echo "-Valor a pasar (1,9,5,4,6,4) y la sumatoria_c del array es: " . sumatoria_c(array(1,9,5,4,6,4)) . "<br>";
        ?>
    </p>
</section>

<?php include ("../ejercicio8/footer.php")?>

</body>
</html>
