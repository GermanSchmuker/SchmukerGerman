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
        <p class="titulo_ejercicio">EJERCICIO 13: MENU DE COMIDA</p>
        <p class="consigna">CONSIGNA: Mostrar en pantalla un formulario con checkbox que permita elegir más de un paso en el menú de
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
        </p>
        <h1 style="text-align: center; margin-top: 1.5em">Marque el menú que quiere hoy:</h1>
        <form name="formulario" action="ejercicio13.php" method="post" style="display: flex; flex-direction: column;justify-content: center; width: 50%; align-items: center; margin: 50px auto; gap: 30px">
            <div>
                <input type="checkbox" id="entrada" name="entrada" value="entrada">
                <label for="entrada">Entrada</label><br>
                <input type="checkbox" id="plato_principal" name="plato_principal" value="plato_principal">
                <label for="plato_principal">Plato principal</label><br>
                <input type="checkbox" id="acompaniamiento" name="acompaniamiento" value="acompaniamiento">
                <label for="acompaniamiento">Acompañamiento</label><br>
                <input type="checkbox" id="postre" name="postre" value="postre">
                <label for="postre">Postre</label>
            </div>
            <input type="submit" value="Enviar" style="width: 50px">
        </form>
    </section>
    <?php include ("../ejercicio8/footer.php")?>
</body>
</html>
