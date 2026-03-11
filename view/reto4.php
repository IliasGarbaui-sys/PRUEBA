<?php

session_start();

if (!($_SESSION["reto3"] == 'check')) {

    header("Location: ../index.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="caja">
            <h2>Reto 4</h2>
            <p>¿Cómo se llama el juego de los astronautas que se hizo viral en 2020?</p>
            <p>¿Cuántos jugadores hay en la partida clásica?</p>
            <p>¿Cómo se llama el rol del jugador que engaña a los demás?</p>
            <form action="../proc/res.proc.php" method="POST">  

                <input type="text" name="juego" placeholder="Nombre del juego">
                <input type="number" name="numero" placeholder="Número de jugadores">
                <input type="text" name="frase" placeholder="Nombre del rol">
                <button type="submit" name="reto4" class="boton">Comprobar</button>         

<?php if (isset($_GET['msg'])) { echo '<p id="msg">' . $_GET['msg'] . '</p>'; } ?>


            </form>
        </div>
    </div>
</body>
</html>
