<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="caja">
            <h2>Reto 1</h2>
            <p>¿Cuál es el juego de bloques más famoso del mundo?</p>
            <p>¿En qué año salió oficialmente?</p>
            <p>¿Cómo se llama el enemigo verde que explota?</p>
            <form action="../proc/res.proc.php" method="POST">

                <input type="text" name="juego" placeholder="Nombre del juego">
                <input type="number" name="anio" placeholder="Año de salida">
                <input type="text" name="personaje" placeholder="Nombre del personaje">
                <button type="submit" name="reto1" class="boton">Comprobar</button>                

<?php if (isset($_GET['msg'])) { echo '<p id="msg">' . $_GET['msg'] . '</p>'; } ?>


            </form>
        </div>
    </div>
</body>
</html>
