<?php
/*Ejercicio 14: La Matrix… digo, Matriz
Solicite mediante un formulario, la dimensión de una matriz cuadrada.
En la siguiente página, cree esa matriz de NxN y realice las siguientes acciones:
a) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
diagonal principal (1,12,23,etc)
b) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
diagonal secundaria (10,19,28,etc)
c) Recorra la matriz (Ahora si con 2 for) y sume todos los valores que contiene. Muestre el
resultado
Tip: En los pasos a y b, no utilice un while, ni un flag, sólo con el contador del for debe alcanzar.
Analice las posiciones de la matriz que componen las diagonales ;)
*/

$matrizPersonalizada = [];
$sumaTotalDeLaMatriz = 0;
$numerosDiagonalPrincipal = [];
$numerosDiagonalSecundaria = [];
$dimensionElegida = 0;


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $dimensionElegida = isset($_GET["dimension"]) ? $_GET["dimension"] : 0;
    //echo $dimensionElegida;
    for ($i = 0; $i < $dimensionElegida; $i++) {
        for ($j = 0; $j < $dimensionElegida; $j++) {
            $matrizPersonalizada[$i][$j] = random_int(0,50); //puedo cambiar hasta que numeros random generar.
            $sumaTotalDeLaMatriz += $matrizPersonalizada[$i][$j];
        }
    }
}


function mostrarMatrizCreada($matrizPersonalizada){
    $x = "";
    for ($i = 0; $i < count($matrizPersonalizada); $i++) {
        for ($j = 0; $j < count($matrizPersonalizada); $j++) {
            $x .=  "<p style='text-align: center; font-size: 1em''>" . $matrizPersonalizada[$i][$j] . "</p>";
        }
    }
    return $x;
}

function obtenerDiagonalPrincipal($matrizPersonalizada){
    $diagonalPrincipal = [];
    for ($i = 0; $i < count($matrizPersonalizada); $i++) {
        $diagonalPrincipal[$i]= $matrizPersonalizada[$i][$i];
    }
 return $diagonalPrincipal;
}

function obtenerDiagonalSecundaria($matrizPersonalizada){
    $diagonalSecundaria = [];

    for ($i = 0; $i < count($matrizPersonalizada); $i++) {
        $diagonalSecundaria[$i] = $matrizPersonalizada[$i][count($matrizPersonalizada) - 1 - $i];
    }
    return $diagonalSecundaria;
}
{

}



?>


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
        <div style="display:grid; grid-template-columns: repeat(<?php echo $dimensionElegida?>, 1fr);place-items: center;">
            <?php echo mostrarMatrizCreada($matrizPersonalizada);?>
        </div>
        <div>
            <p style=";margin-top: 1.5em; text-align: center; font-family: 'Droid Sans Mono', 'DejaVu Sans Mono', 'Monospace', monospace; font-size: 1em">La suma de los valores es: <?php echo $sumaTotalDeLaMatriz?></p>

            <p style="text-align: center; font-family: 'Droid Sans Mono', 'DejaVu Sans Mono', 'Monospace', monospace; font-size: 1em">Numeros de la diagonal principal:
                <?php for ($i = 0; $i < count(obtenerDiagonalPrincipal($matrizPersonalizada)); $i++) {
                    echo " (" . obtenerDiagonalPrincipal($matrizPersonalizada)[$i] . ") ";
                } ?> </p>

            <p style="text-align: center; font-family: 'Droid Sans Mono', 'DejaVu Sans Mono', 'Monospace', monospace; font-size: 1em">Numeros de la diagonal secundaria:
                <?php for ($i = 0; $i < count(obtenerDiagonalSecundaria($matrizPersonalizada)); $i++) {
                    echo " (" . obtenerDiagonalSecundaria($matrizPersonalizada)[$i] . ") ";
                } ?> </p>
        </div>

    </section>
    <?php include ("../ejercicio8/footer.php")?>
</body>
</html>


