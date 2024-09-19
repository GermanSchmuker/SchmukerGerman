<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 4</title>
</head>
<body style="background-color: #b3b3b3">
<?php include ("../ejercicio8/header.php")?>

<section class="ejercicio">
    <p class="titulo_ejercicio">EJERCICIO 4: INCREMENTAR</p>
    <p class="consigna">CONSIGNA: Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
        la función, el valor del parámetro haya sido incrementado en 1
        (Ver pasaje de parámetros por referencia)
    </p>
    <p>
        <?php
        require_once("../ejercicio4/ejercicio4.php");

        $numero = 42;
        echo "<br>" . "-Valor a pasar (" . $numero .") y el resultado es: " . incrementar($numero) . "<br>";
        ?>
    </p>
</section>

<?php include ("../ejercicio8/footer.php")?>

</body>
</html>