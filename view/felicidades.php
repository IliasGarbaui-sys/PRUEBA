<?php

session_start();

if (!($_SESSION["felicidades"] == 'check')) {

    header("Location: ../index.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades!</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="caja">
            <h1>Felicidades!</h1>
            <p>Has superado todos los retos.</p>
            <p>Eres un verdadero Gamer.</p>
            <a href="../proc/replay.proc.php" class="boton">Volver al inicio</a>    

        </div>
    </div>
</body>
</html>
