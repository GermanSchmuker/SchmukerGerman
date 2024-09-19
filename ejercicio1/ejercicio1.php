<?php
 /*Ejercicio 1: Semáforo
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando switch*/

//echo "<br>" . "EJERCICIO 1" . "<br>";

function semaforo_a($color) {
    $color = strtolower($color);
    $accion = "Estado desconocido";
    if ($color == "rojo"){
        $accion = "frene";
    }else if ($color == "amarillo"){
        $accion = "precaución";
    }else if ($color == "verde"){
        $accion = "avance";
    }
    return $accion;
}

function semaforo_b($color){
    $color = strtolower($color);
    $accion = "Estado desconocido";
    return $color == "rojo" ? $accion = "frene" :
        ($color == "amarillo" ? $accion = "precaucion" :
            ($color == "verde" ? $accion = "avance" :
                $accion = "estado desconocido"));
}

function semaforo_c($color){
    $color = strtolower($color);
    switch ($color) {
        case "rojo":
            $accion = "frene";
            break;
        case "amarillo":
            $accion = "precaucion";
            break;
        case "verde":
            $accion = "avance";
            break;
        default:
            $accion = "estado desconocido";
            break;
    }
    return $accion;
}




?>
