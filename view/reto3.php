<?php

session_start();

if (!($_SESSION["reto2"] == 'check')) {

    header("Location: ../index.php");

    exit();

}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 3</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="caja">
            <h2>Reto 3</h2>
            <p>¿Cómo se llama el battle royale de Epic Games?</p>
            <p>¿Cuántos jugadores caen en cada partida?</p>
            <p>¿Cómo se llama el skin por defecto más conocido?</p>
            <form action="../proc/res.proc.php" method="POST">              

                <input type="text" name="juego" placeholder="Nombre del juego">
                <input type="number" name="numero" placeholder="Número de jugadores">
                <input type="text" name="personaje" placeholder="Nombre del skin por defecto">
                <button type="submit" name="reto3" class="boton">Comprobar</button>     

<?php if (isset($_GET['msg'])) { echo '<p id="msg">' . $_GET['msg'] . '</p>'; } ?>


            </form>
        </div>
    </div>
</body>
</html>
