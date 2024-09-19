<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 2</title>
</head>
<body style="background-color: #b3b3b3">
    <?php include ("../ejercicio8/header.php")?>
    <section class="ejercicio">
        <p class="titulo_ejercicio">EJERCICIO 2: BINOMIO CUADRADO PERFECTO</p>
        <p class="consigna">CONSIGNA: Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2
            a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de potencia
            b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a2 + 2*a*b + b2
        </p>
        <p>
            <?php
            require_once("../ejercicio2/ejercicio2.php");

            echo "<br>-Valor a pasar (5,3), y el resultado es: " . binomioCuadradoPerfecto_a(5, 3) . "<br>";
            echo "-Valor a pasar (5,3), y el resultado es: " . binomioCuadradoPerfecto_b(5, 3) . "<br>";
            ?>
        </p>
    </section>

    <?php include ("../ejercicio8/footer.php")?>

</body>
</html>
