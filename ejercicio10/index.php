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
        <?php require_once "../Ejercicio9/ejercicio9.php"?>

        <section class="ejercicio">
            <p class="titulo_ejercicio">EJERCICIO 10: INSTA RECICLADO(PARA CUIDAR EL MEDIO AMBOIENTE)</p>
            <p class="consigna">CONSIGNA: Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que
                contiene en la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde
                efectivamente se muestre dicha imagen<br>

            <section style="margin: 2em">
                <p style="color: #ffffff; background-color: #c62323; text-align: center"><?php  if (isset($error) && isset($mensajeDeError)) if ($error) echo $mensajeDeError;?></p>
                <ul style="display: flex; flex-direction: column; font-size: 1.2em;">
                <?php
                    if (isset($misArchivos) && isset($carpetaDeImagenes)){
                        if (count($misArchivos) > 0){
                            $misArchivos = array_values($misArchivos);

                            for ($i = 0; $i < count($misArchivos); $i++) {
                                echo '<li style="margin-bottom: .5em">
                                    <a href="ejercicio10.php?imgAMostrar='. $misArchivos[$i] .'" style="color: blue;">' . $misArchivos[$i] . '</a>
                                 </li>';
                            }
                        }
                    }
                ?>
                </ul>
            </section>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="cont_inputs">
                    <input type="text" name="nombre_archivo" placeholder="Nombre imagen">
                    <input type="file" name="file">
                    <input type="submit" name="archivo" value="Publicar" required>
                </div>
            </form>
        </section>

        <?php include "../Ejercicio8/footer.php";?>
</body>
</html>
