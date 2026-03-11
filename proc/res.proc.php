<?php


// reto1 -> reto2

if (isset($_POST['reto1']) && strtolower(trim($_POST['juego'])) == 'minecraft' && $_POST['anio'] == '2011' && strtolower(trim($_POST['personaje'])) == 'creeper') {

    session_start();

    $_SESSION['reto1'] = 'check';

    header('Location: ../view/reto2.php');

    exit();

} else if (isset($_POST['reto1'])) {

    header('Location: ../view/reto1.php?msg=Pista: el juego es de bloques, salio en 2011 y el personaje verde explota');

    exit();

}


// reto2 -> reto3

else if (isset($_POST['reto2']) && strtolower(trim($_POST['consola'])) == 'playstation' && strtolower(trim($_POST['empresa'])) == 'sony' && $_POST['mando'] == '4') {

    session_start();

    $_SESSION['reto2'] = 'check';

    header('Location: ../view/reto3.php');

    exit();

} else if (isset($_POST['reto2'])) {

    header('Location: ../view/reto2.php?msg=Pista: es la consola de Sony y el mando tiene 4 botones de formas');

    exit();

}


// reto3 -> reto4

else if (isset($_POST['reto3']) && strtolower(trim($_POST['juego'])) == 'fortnite' && $_POST['numero'] == '100' && strtolower(trim($_POST['personaje'])) == 'jonesy') {

    session_start();

    $_SESSION['reto3'] = 'check';

    header('Location: ../view/reto4.php');

    exit();

} else if (isset($_POST['reto3'])) {

    header('Location: ../view/reto3.php?msg=Pista: battle royale de Epic Games, caen 100 jugadores y el skin por defecto tiene nombre');

    exit();

}


// reto4 -> felicidades

else if (isset($_POST['reto4']) && strtolower(trim($_POST['juego'])) == 'among us' && $_POST['numero'] == '10' && strtolower(trim($_POST['frase'])) == 'impostor') {

    session_start();

    $_SESSION['felicidades'] = 'check';

    header('Location: ../view/felicidades.php');

    exit();

} else if (isset($_POST['reto4'])) {

    header('Location: ../view/reto4.php?msg=Pista: juego de astronautas viral en 2020, 10 jugadores y hay alguien que miente');

    exit();

}


?>