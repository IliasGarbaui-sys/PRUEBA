<?php

session_start();

if (!($_SESSION["reto1"] == 'check')) {

    header("Location: ../index.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="caja">
            <h2>Reto 2</h2>
            <p>¿Cómo se llama la consola rival de Xbox?</p>
            <p>¿Qué empresa la fabrica?</p>
            <p>¿Cuántos botones de formas tiene el mando? (triángulo, cruz, círculo...)</p>
            <form action="../proc/res.proc.php" method="POST">             

                <input type="text" name="consola" placeholder="Nombre de la consola">
                <input type="text" name="empresa" placeholder="Empresa fabricante">
                <input type="number" name="mando" placeholder="Número de botones de formas">
                <button type="submit" name="reto2" class="boton">Comprobar</button>      

                <?php if (isset($_GET['msg'])) { echo '<p id="msg">' . $_GET['msg'] . '</p>'; } ?>


            </form>
        </div>
    </div>
</body>
</html>
