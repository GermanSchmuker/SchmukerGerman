<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EJERCICIO 7 - GUIA</title>
</head>
<body>
    <?php
    /*Ejercicio 7: Integrando PHP, HTML y CSS
    Cree una web a modo de demostrar las funciones resueltas en el trabajo práctico.
    Cree un archivo pruebas.php, que contenga cómo título su nombre, y apellido.
    A continuación liste los ejercicios a resolver, y en cada caso comente con qué valores se llama a la
    función, la llame efectivamente y muestre por pantalla el resultado utilizando la función “echo” .
    Cómo resultado se debería visualizar algo similar al ejemplo al ingresar a localhost:*/
    ?>
    <h1>CLAUDIO GERMÁN SCHMUKER</h1>
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
    <section class="ejercicio">
        <p class="titulo_ejercicio">EJERCICIO 2: BINOMIO CUADRADO PERFECTO</p>
        <p class="consigna">CONSIGNA: Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2
            a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de potencia
            b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a2 + 2*a*b + b2
        </p>
        <p>
            <?php
            require_once("../ejercicio2/ejercicio2.php");

            echo "<br>-Valor a pasar (5,3), y el resultado es: " . binomioCuadradoPerfecto_a(5, 3) . "<br>";
            echo "-Valor a pasar (5,3), y el resultado es: " . binomioCuadradoPerfecto_b(5, 3) . "<br>";
            ?>
        </p>
    </section>
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
    </section>
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
    <section class="ejercicio">
        <p class="titulo_ejercicio">EJERCICIO 5: SUMATORIA</p>
        <p class="consigna">CONSIGNA: Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores.
            a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
            b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
            c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
        </p>
        <p>
            <?php
            require_once("../ejercicio5/ejercicio5.php");

            echo  "<br>" . "-Valor a pasar (1,9,5,4,6,4) y la sumatoria_a del array es: " . sumatoria_a(array(1,9,5,4,6,4)) . "<br>";
            echo "-Valor a pasar (1,9,5,4,6,4) y la sumatoria_b del array es: " . sumatoria_b(array(1,9,5,4,6,4)) . "<br>";
            echo "-Valor a pasar (1,9,5,4,6,4) y la sumatoria_c del array es: " . sumatoria_c(array(1,9,5,4,6,4)) . "<br>";
            ?>
        </p>
    </section>
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
</body>
</html>