<?php
$nombresDeImagenes = [];
$carpetaDeImagenes = "../imagenes/";
$nombre = "";
$rutaImagen = "";
$error = false;
$mensajeDeError= "";
$misArchivos = array_diff(scandir($carpetaDeImagenes), array('.', '..'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error=false;
    $nombre = $_POST["nombre_archivo"];

    if ($_FILES["file"]["error"] > 0) {
        $mensajeDeError = "Ocurrio un error al subir el archivo. Intente nuevamente.";
        $error = true;
    }else{
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        if ($extension == "png" || $extension == "jpg" || $extension == "jpeg" || $extension == "avif") {
            $rutaImagen = $carpetaDeImagenes . $nombre . "." . $extension;

            if (file_exists($rutaImagen)) {
                $mensajeDeError = "La imagen: " . $nombre . "." . $extension . " ya existe. ";
                $error = true;
            }else{
                move_uploaded_file($_FILES["file"]["tmp_name"], $rutaImagen);
                $misArchivos = array_diff(scandir($carpetaDeImagenes), array('.', '..'));
                $actual = isset($_POST["actual"]) ? $_POST["actual"] : "";
                $actual == "ejercicio9" ? header("Location: index.php") : header("Location: ../Ejercicio10/index.php");
                exit();
            }
        }else{
            $mensajeDeError = "Formato inválido. Intente nuevamente";
            $error = true;
        }
    }
}