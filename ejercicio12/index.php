<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 12</title>
</head>
<body>
        <?php include ("../ejercicio8/header.php")?>
        <section class="ejercicio">
            <p class="titulo_ejercicio">EJERCICIO 12: CONTROL INTERPLANETARIO</p>
            <p class="consigna">CONSIGNA: Crear una web que permita ingresar en un formulario, los datos de ingreso a nuestro planeta:
                nombre del visitante y planeta perteneciente (mediante un combo).
                Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
                cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
                planeta Tierra.
                Tip: Almacenar en un archivo (en el servidor) cada una de las visitas, para dicho almacenado, pueden
                utilizar formato json, archivo separado por comas, cada visita en un archivo o algún otro tipo de su
                preferencia. No utilizar base de datos
                Tip: Es recomendable, realizar el cálculo de visitas, cuando leen el archivo, justo antes de mostrarlo y
                no persistir esta sumatoria

            </p>
            <form name="formulario" action="ejercicio12.php" method="post" style="margin: 1em">
                <label for="input_nombre">Ingrese su nombre</label>
                <input type="text" name="input_nombre" id="input_nombre" placeholder="Nombre" required>
                <label for="selector_planetas">Ingrese su planeta</label>
                <select name="selector_planetas" id="selector_planetas">
                    <option value="marte">MARTE</option>
                    <option value="jupiter">JUPITER</option>
                    <option value="neptuno">NEPTUNO</option>
                    <option value="tierra" selected>TIERRA</option>
                    <option value="pluton">PLUTON</option>
                    <option value="mercurio">MERCURIO</option>
                </select>
                <button type="submit">Enviar</button>
            </form>
        </section>
        <?php include ("../ejercicio8/footer.php")?>
</body>
</html>


<?php
