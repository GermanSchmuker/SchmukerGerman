<html>
    <head>
        <title>Guia de ejercicios PHP</title>
    </head>
    <body>

    </body>
</html>



<?php
/*EJERCICIO 1*/
require_once("ejercicio1/ejercicio1.php");

echo "<br>" . semaforo_a("verde") . "<br>";
echo semaforo_b("amarillo") . "<br>";
echo semaforo_c("Rojo") . "<br>";

/*EJERCICIO 2*/
require_once("ejercicio2/ejercicio2.php");

echo "<br>El resultado es:" . binomioCuadradoPerfecto_a(5, 3) . "<br>";
echo "El resultado es:" . binomioCuadradoPerfecto_b(5, 3) . "<br>";

/*EJERCICIO 3*/
require_once("ejercicio3/ejercicio3.php");

echo "<br>" . "El texto concatenado es: " . concatenar("Hola","mundo!");

/*EJERCICIO 4*/
require_once("ejercicio4/ejercicio4.php");
$numero = 5;
incrementar($numero);
echo "<br>" . "No pide mostrar nada por pantalla" . "<br>";

/*EJERCICIO 5*/
require_once("ejercicio5/ejercicio5.php");

echo  "<br>" . "la sumatoria_a del array es: " . sumatoria_a(array(1,9,5,4,6,4)) . "<br>";
echo "la sumatoria_b del array es: " . sumatoria_b(array(1,9,5,4,6,4)) . "<br>";
echo "la sumatoria_c del array es: " . sumatoria_c(array(1,9,5,4,6,4)) . "<br>";


/*EJERCICIO 6*/
require_once ("ejercicio6/ejercicio6.php");
$saludoFormal = new Saludar("German", "Schmuker");
echo "-Saludo formal (10): " . $saludoFormal->saludoFormal(10);
echo "-Saludo formal (15): " . $saludoFormal->saludoFormal(15);
echo "-Saludo formal (22): " . $saludoFormal->saludoFormal(22);

$saludoInformal = new Saludar("German", "Schmuke");
echo "-Saludo informal (10): " . $saludoInformal->saludoInformal(10);
echo "-Saludo informal (15): " . $saludoInformal->saludoInformal(15);
echo "-Saludo informal (22): " . $saludoInformal->saludoInformal(22);
















?>
