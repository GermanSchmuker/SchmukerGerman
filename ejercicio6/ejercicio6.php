<?php
/*Ejercicio 6: Nombre completo
Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
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
*/
//echo "<br> EJERCICIO 6<br>";
class Saludar{
    private $nombre;
    private $apellido;
    public function __construct($nombre,$apellido){
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
    }

    public function saludoFormal($horario){
        $saludo = "";
        if($horario >= 5 && $horario < 13){
            $saludo = "Buenos dias " . $this->nombre . " " . $this->apellido . "<br>";
        }else if($horario >= 13 && $horario < 21){
            $saludo = "Buenas tardes " . $this->nombre . " " . $this->apellido . "<br>";
        }else{
            $saludo = "Buenas noches " . $this->nombre . " " . $this->apellido . "<br>";
        }
        return $saludo;
    }

    public function saludoInformal($horario){
        if($horario >= 5 && $horario < 13){
            $saludo = "Hola " . $this->nombre . " que tengas un lindo dia!" . "<br>";
        }else if($horario >= 13 && $horario < 21){
            $saludo = "Hola " . $this->nombre . " que tengas una linda tarde!" . "<br>";
        }else{
            $saludo = "Hola " . $this->nombre . " que tengas una linda noche!" . "<br>";
        }
        return $saludo;
    }
}







?>
