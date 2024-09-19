<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/SchmukerGerman/ejercicio8/style.css">
    <title>EJERCICIO 9</title>
</head>
<body style="background-color: #b3b3b3">
<?php include ("../ejercicio8/header.php")?>
<?php require_once ("../ejercicio9/ejercicio9.php"); ?>

<section class="ejercicio">
    <p class="titulo_ejercicio">EJERCICIO 9: INSTA GRAMO</p>
    <p class="consigna">CONSIGNA: Realizar una web que muestre todas las imágenes que contiene en la carpeta “/imagenes” con su
        respectivo nombre de archivo como pié de imagen. Al final de dicha web debe haber un formulario
        que permita subir una imagen con un nombre a designar.<br>
        Tip: Luego de cargar la imagen, debe volver a la misma página, sin tener que tocar links “volver” o
        cosas similares (Como en todo insta-gramo!)<br>
        Tip: Para facilitar la resolución, tener 3 imágenes cargadas en la carpeta.

    <section>
        <p style="color: #ffffff; background-color: red; text-align: center; margin: 20px;">
            <?php  if (isset($error) && isset($mensajeDeError)) if ($error) echo $mensajeDeError; ?>
        </p>

        <?php
        if (isset($misArchivos) && isset($carpetaDeImagenes)){
            if (count($misArchivos) > 0){
                $misArchivos = array_values($misArchivos);

                for ($i = 0; $i < count($misArchivos); $i++) {
                        echo '
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin: 30px">
                        <img src="' . $carpetaDeImagenes . $misArchivos[$i] . '" style="width: 400px">
                        <h4>Nombre de imagen: ' . $misArchivos[$i] . '</h4>
                    </div>';

                }
            }
        }
        ?>
    </section>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="cont_inputs">
            <input type="text" name="nombre_archivo" placeholder="Nombre de imagen">
            <input type="file" name="file">
            <input type="submit" name="archivo" value="Publicar" required>
            <input type="hidden" name="actual" value="ejercicio9">
        </div>
    </form>
</section>
<?php include ("../ejercicio8/footer.php")?>

</body>
</html>