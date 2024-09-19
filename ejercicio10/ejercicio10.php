<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ejercicio8/style.css">
    <title>Ejercicio 10</title>
</head>
<body>
<?php include "../Ejercicio8/header.php";?>

<section class="ejercicio">
    <p class="consigna">
        <section style="margin: 2em">
            <p style="color: #ffffff; background-color: #c62323; text-align: center"><?php  if (isset($error) && isset($mensajeDeError)) if ($error) echo $mensajeDeError;?></p>
            <ul style="display: flex; flex-direction: column; font-size: 1.2em;">

                <?php
                $nombreDeLaImagen = "";
                isset($_GET["imgAMostrar"]) ? $nombreDeLaImagen = $_GET["imgAMostrar"] : $nombreDeLaImagen = "";
                if ($nombreDeLaImagen != "") {
                    echo '<div style="display: flex;flex-direction: column; align-items: center">
                            <img src="../imagenes/' . $nombreDeLaImagen . '" alt="Imagen no carga" style="width: 400px">
                            <h4>' . $nombreDeLaImagen . '</h4>
                          </div>';
                }
                ?>
            </ul>
         </section>
    </p>
</section>

<?php include "../Ejercicio8/footer.php";?>
</body>
</html>
