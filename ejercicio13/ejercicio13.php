<?php
/*Ejercicio 13: ConociendINIs con el Menú no saludable
Mostrar en pantalla un formulario con checkbox que permita elegir más de un paso en el menú de
hoy: Entrada, plato principal, acompañamiento y postre.
Una vez enviado el formulario, lea el archivo menu.ini, y muestre en pantalla sólo los pasos del menú
que solicitó el comensal:
menu.ini
entrada=Snacks
plato_principal=Milanesa
acompañamiento=Papas fritas
postre=helado
Tip: Utilizar función parse_ini_file que permite leer archivos .ini de modo sencillo
Tip: Si la letra ñ es un problema, no la utilice
Tip: Puede cambiar los menú de comida por lo que prefiera, la intención es aprender a leer un
archivo .ini y utilizar el array asociativo resultante
*/
$mostrarEntrada = "";
$mostrarPlatoPrincipal = "";
$mostrarAcompaniamiento = "";
$mostrarPostre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = isset($_POST["entrada"]) ? $_POST["entrada"] : "";
    $platoPrincipal = isset($_POST["plato_principal"]) ? $_POST["plato_principal"] : "";
    $acompaniamiento = isset($_POST["acompaniamiento"]) ? $_POST["acompaniamiento"] : "";
    $postre = isset($_POST["postre"]) ? $_POST["postre"] : "";
    /*echo $postre;
    echo $platoPrincipal;
    echo $acompaniamiento;
    echo $entrada;*/
    $contenido = parse_ini_file("menu.ini",true);

    if(!empty($entrada)){
        $mostrarEntrada = $contenido[$entrada];
        /*echo $mostrarEntrada;*/
    }
    if(!empty($platoPrincipal)){
        $mostrarPlatoPrincipal = $contenido[$platoPrincipal];
    }
    if (!empty($acompaniamiento)) {
        $mostrarAcompaniamiento = $contenido[$acompaniamiento];
    }
    if (!empty($postre)) {
        $mostrarPostre = $contenido[$postre];
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 13</title>
</head>
<body style="background-color: #b3b3b3">
    <?php include ("../ejercicio8/header.php")?>
    <section class="ejercicio">
        <p style="text-align: center; font-family: 'Droid Sans Mono', 'DejaVu Sans Mono', 'Monospace', monospace; font-size: 1.5em">El menu elejido es:</p>
        <p style="text-align: center; font-family: 'Droid Sans Mono', 'DejaVu Sans Mono', 'Monospace', monospace; font-size: 1.5em"">
        <?php echo !empty($mostrarEntrada) ? "<br>" .  $mostrarEntrada : ""?>
        <?php echo !empty($mostrarPlatoPrincipal) ? "<br>" .  $mostrarPlatoPrincipal : ""?>
        <?php echo !empty($mostrarAcompaniamiento) ? "<br>" .  $mostrarAcompaniamiento : ""?>
        <?php echo !empty($mostrarPostre) ? "<br>" .  $mostrarPostre : ""?>
        </p>
    </section>
    <?php include ("../ejercicio8/footer.php")    ?>

</body>
</html>


