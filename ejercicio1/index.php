<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ejercicio8/style.css">
    <title>EJERCICIO 1</title>
</head>
<body style="background-color: #b3b3b3">
    <?php include ("../ejercicio8/header.php")?>
    <section class="ejercicio">
        <p class="titulo_ejercicio">EJERCICIO 1: SEMAFORO</p>
        <p class="consigna">CONSIGNA: Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
            “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
            “avance” o “estado desconocido” ante un caso no esperado.
            a) función semaforo_a($color): Resuelva la solución utilizando if else
            b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
            c) función semaforo_c($color): Resuelva la solución utilizando switch
        </p>
        <p>
            <?php
            require_once("../ejercicio1/ejercicio1.php");

            echo "<br>-Valor a pasar (verde): " . semaforo_a("verde") . "<br>";
            echo "-Valor a pasar (amarillo): " . semaforo_b("amarillo") . "<br>";
            echo "-Valor a pasar (rojo): " . semaforo_c("Rojo") . "<br>";
            ?>
        </p>
    </section>
    <?php include ("../ejercicio8/footer.php")?>
</body>
</html>
