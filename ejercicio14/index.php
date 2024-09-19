<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 14</title>
</head>
<body style="background-color: #b3b3b3">
<?php include ("../ejercicio8/header.php")?>
    <section class="ejercicio">
        <p class="titulo_ejercicio">EJERCICIO 14: MATRIZ</p>
        <p class="consigna">CONSIGNA: Solicite mediante un formulario, la dimensión de una matriz cuadrada.
            En la siguiente página, cree esa matriz de NxN y realice las siguientes acciones:
            a) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
            diagonal principal (1,12,23,etc)
            b) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
            diagonal secundaria (10,19,28,etc)
            c) Recorra la matriz (Ahora si con 2 for) y sume todos los valores que contiene. Muestre el
            resultado
            Tip: En los pasos a y b, no utilice un while, ni un flag, sólo con el contador del for debe alcanzar.
            Analice las posiciones de la matriz que componen las diagonales ;)
            Ejercicio 15: Buscando una palabra
        </p>
        <form action="ejercicio14.php" method="get" name="formulario_matriz" style="display: flex; flex-direction: column;justify-content: center; width: 50%; align-items: center; margin: 50px auto; gap: 20px">
            <label for="dimension">Ingrese la dimensión de la matriz: </label>
            <input type="number" id="dimension" name="dimension" min="2" required>
            <input type="submit" value="Generar matriz">
        </form>

</section>

<?php include ("../ejercicio8/footer.php")?>
</body>
</html>



<?php
