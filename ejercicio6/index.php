<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 6</title>
</head>
<body style="background-color: #b3b3b3">
<?php include ("../ejercicio8/header.php")?>

<section class="ejercicio">
    <p class="titulo_ejercicio">EJERCICIO 6: NOMBRE COMPLETO</p>
    <p class="consigna">CONSIGNA: Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
        persona.
        Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
        concatenado al nombre un prefijo dependiendo del horario:
        05hs a 13hs “Buenos días”
        13hs a 21hs “Buenas tardes”
        21hs a 05hs “Buenas noches”
        Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
        Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
        sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
        perteneciente al horario .
        Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
        “¡Hola Ezequiel! Que tengas un buen día”
    </p>
    <p>
        <?php
        require_once ("../ejercicio6/ejercicio6.php");
        $saludoFormal = new Saludar("German", "Schmuker");
        echo "<br>" . "-Saludo formal (10): " . $saludoFormal->saludoFormal(10);
        echo "-Saludo formal (15): " . $saludoFormal->saludoFormal(15);
        echo "-Saludo formal (22): " . $saludoFormal->saludoFormal(22);

        $saludoInformal = new Saludar("German", "Schmuke");
        echo "-Saludo informal (10): " . $saludoInformal->saludoInformal(10);
        echo "-Saludo informal (15): " . $saludoInformal->saludoInformal(15);
        echo "-Saludo informal (22): " . $saludoInformal->saludoInformal(22);
        ?>
    </p>
</section>
<?php include ("../ejercicio8/footer.php")?>

</body>
</html>
