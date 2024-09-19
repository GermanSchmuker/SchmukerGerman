<?php
/*Ejercicio 2: Binomio cuadrado perfecto
Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2
a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
potencia
b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
desarrollada del binomio: a2 + 2*a*b + b2*/

//echo "<br>" . "EJERCICIO 2" . "<br>";

function binomioCuadradoPerfecto_a($a, $b){
    return ($a+$b)*($a+$b);
}

function binomioCuadradoPerfecto_b($a, $b){
    return $a*$a + 2*$a*$b + $b*$b;
}
?>