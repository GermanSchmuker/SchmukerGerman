<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 3</title>
</head>
<body style="background-color: #b3b3b3">
<?php include ("../ejercicio8/header.php")?>
<section class="ejercicio">
    <p class="titulo_ejercicio">EJERCICIO 3: CONCATENAR TEXTOS</p>
    <p class="consigna">CONSIGNA: Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
        ambos textos concatenados como uno solo
    </p>
    <p>
        <?php
        require_once("../ejercicio3/ejercicio3.php");

        echo "<br>" . "-El valor a pasar (Hola, mundo!), y el texto concatenado es: " . concatenar("Hola","mundo!");
        ?>
    </p>
</section>

<?php include ("../ejercicio8/footer.php")?>

</body>
</html>
