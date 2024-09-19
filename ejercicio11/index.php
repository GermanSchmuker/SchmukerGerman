<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 11</title>
</head>
<body>
<?php include_once ("../ejercicio8/header.php")?>
<section class="ejercicio">
    <p class="titulo_ejercicio">EJERCICIO 11: DADOS</p>
    <p class="consigna">CONSIGNA: Realizar una web que permita indicar la cantidad de dados a lanzar (mediante input de tipo option) y
        al tocar un botón “lanzar dados” pase a una segunda pantalla donde muestre los dados lanzados
        como imagen y la suma de sus valores como puntaje obtenido.
        Tip: Buscar una función en php que devuelve un número random para resolver el ejercicio.
    </p>
    <main>
        <p style="margin-top: 1em">Elije la cantidad de dados a lanzar</p>
        <form name="formulario" action="ejercicio11.php" method="post" style="margin: 1em">
            <select name="selectorDeDados" class="selectorDeDados">
                <option name="opcion1" selected>1</option>
                <option name="opcion2">2</option>
                <option name="opcion3">3</option>
                <option name="opcion4">4</option>
                <option name="opcion5">5</option>
                <option name="opcion6">6</option>
            </select>
            <button type="submit" class="boton">Lanzar dados</button>
        </form>
    </main>
        <?php


        ?>

</section>

<?php include_once ("../ejercicio8/footer.php")?>
</body>
</html>



<?php
