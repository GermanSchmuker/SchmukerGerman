<?php
/*Ejercicio 12: Contador de visitas… extraterrestres
Crear una web que permita ingresar en un formulario, los datos de ingreso a nuestro planeta:
nombre del visitante y planeta perteneciente (mediante un combo).
Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
planeta Tierra.
Tip: Almacenar en un archivo (en el servidor) cada una de las visitas, para dicho almacenado, pueden
utilizar formato json, archivo separado por comas, cada visita en un archivo o algún otro tipo de su
preferencia. No utilizar base de datos
Tip: Es recomendable, realizar el cálculo de visitas, cuando leen el archivo, justo antes de mostrarlo y
no persistir esta sumatoria*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreVisitante = $_POST["input_nombre"];
    $selectorPlaneta = $_POST["selector_planetas"];
    $archivo = "visitantes.json";
    $contenidoArchivo = file_get_contents($archivo);
    $visitantes = json_decode($contenidoArchivo, true);

    if (!is_array($visitantes)) {
        $visitantes = [];
    }

    $visitantes[] = ["nombre" => $nombreVisitante, "planeta" => $selectorPlaneta];
    file_put_contents($archivo, json_encode($visitantes));
    $visitantesNoPertenecientesALaTierra = 0;

    foreach ($visitantes as $visitante) {
        if (is_array($visitante) && isset($visitante["planeta"])) {
            if ($visitante["planeta"] != "tierra") {
                $visitantesNoPertenecientesALaTierra++;
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EERCICIO 12</title>
</head>
<body>
    <?php include ("../ejercicio8/header.php")?>
    <section class="ejercicio">
        <table style="width: 80%; border-collapse: collapse; margin: 20px auto; font-family: Arial, sans-serif;">
            <tr>
                <th colspan="2" style="background-color: #1a1a1a; color: #00fa00; padding: 10px; text-align: center; font-size: 1.2em;">
                Control interplanetario
                </th>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">VISITANTE</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">PLANTETA PERTENECIENTE</td>
            </tr>
            <?php
            foreach ($visitantes as $visitante) {
                if (is_array($visitante) && isset($visitante["planeta"])) {
                    echo "
                                <tr style='background-color: #f2f2f2;'>
                                    <td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>" . $visitante["nombre"] . "</td>
                                    <td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>" . $visitante["planeta"] . "</td>
                                </tr>";
                }
            }
            ?>
        </table>
        <?php echo "<p style='text-align: center;'> Visitantes extraterrestres: " . $visitantesNoPertenecientesALaTierra . "</p>"; ?>
        <a href="index.php" style="text-decoration: none; text-align: center; display: block; margin-top: 1.5em; color: darkblue;"> <-Agregar visitante</a>
    </section>
    <?php include ("../ejercicio8/footer.php")?>
</body>
</html>
